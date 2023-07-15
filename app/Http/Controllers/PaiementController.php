<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Chambre;
use App\Models\Appartement;
use App\Models\Paiement;
use App\Models\Reservation; // Ajout du modèle Reservation

class PaiementController extends Controller
{

    public function getPaymentLink($type, $id)
    {
        // Récupérer le logement par son type et son id
        $logement = $type == 'chambre' ? Chambre::find($id) : Appartement::find($id);

        // Vérifier si le logement existe et s'il est disponible
        if ($logement && $logement->disponibilite) {

            // Récupérer le prix du logement
            $prix = $logement->prix;

            // Calculer le montant à payer (5% du prix du logement)
            $montant = 0.05 * $prix;

            // Créer un client Guzzle pour appeler l'API de Monetbil
            $client = new Client(['base_uri' => 'https://api.monetbil.com']);

            // Envoyer la requête POST avec les paramètres nécessaires
            $response = $client->request('POST', '/widget/v2.1/qDuZqMGvLpM1oBHZi9Bkx9aN5qP6YD01', [
                'form_params' => [
                    'amount' => $montant,
                    'country' => 'CM',
                    'currency' => 'XAF',
                    // Ajouter un paramètre extra pour stocker le type et l'id du logement
                    'extra' => $type . '-' . $id,
                ]
            ]);

            // Récupérer le corps de la réponse
            $body = $response->getBody();
            $result = json_decode($body, true);

            // Vérifier si la requête a réussi
            if ($result['success']) {
                // Renvoyer l'url de paiement généré
                return redirect($result['payment_url']);
            } else {
                // Gérer l'erreur ici
                return redirect()->back()->with('error', 'Une erreur est survenue lors de la création du lien de paiement.');
            }
        } else {
            // Gérer le cas où le logement n'existe pas ou n'est pas disponible
            return redirect()->back()->with('error', 'Le logement demandé est invalide ou n\'est pas disponible.');
        }
    }

    public function handlePaymentNotification(Request $request)
    {
        // Récupérer les données envoyées par Monetbil
        $data = $request->all();

        // Vérifier si le paiement a été effectué avec succès
        if ($data['status'] == 'SUCCESS') {

            // Récupérer le type et l'id du logement à partir du paramètre extra
            list($type, $id) = explode('-', $data['extra']);

            // Récupérer le logement par son type et son id
            $logement = $type == 'chambre' ? Chambre::find($id) : Appartement::find($id);

            // Vérifier si le logement existe et s'il est disponible
            if ($logement && $logement->disponibilite) {

                // Créer un nouveau paiement avec les données reçues
                $paiement = new Paiement();
                $paiement->montant = $data['amount'];
                $paiement->devise = $data['currency'];
                $paiement->service = 'Monetbil';
                $paiement->transaction_id = $data['transaction_id'];
                $paiement->phone_number = $data['phone_number'];
                $paiement->operator_reference = $data['operator_reference'];
                $paiement->save();

                // Créer une nouvelle réservation avec le logement et le paiement associés
                $reservation = new Reservation();
                $reservation->logement()->associate($logement); // Utiliser la méthode logement() au lieu de logements()
                $reservation->paiement()->associate($paiement); // Utiliser la méthode paiement() au lieu de paiements()
                // Ajouter d'autres informations sur la réservation (date, durée, locataire, etc.)
                // ...
                $reservation->save();

                // Mettre à jour la disponibilité du logement à false
                $logement->disponibilite = false;
                $logement->save();

                // Envoyer une confirmation au locataire par email ou SMS

                // Rediriger vers une page de succès
                return redirect()->route('success');
            } else {
                // Gérer le cas où le logement n'existe pas ou n'est pas disponible
                return redirect()->back()->with('error', 'Le logement demandé est invalide ou n\'est pas disponible.');
            }
        } else {
            // Gérer le cas où le paiement a échoué
            return redirect()->back()->with('error', 'Le paiement a échoué.');
        }
    }
}
