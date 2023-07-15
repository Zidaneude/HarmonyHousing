<?php

namespace App\Http\Controllers\Proprietaire;

use toastr;
use App\Models\Offre;
use App\Models\Chambre;
use App\Models\Inclure;
use App\Models\Equiper2;
use App\Models\Logement;
use App\Models\Equipement;
use App\Models\Appartement;
use Illuminate\Http\Request;
use App\Models\Chambre_equipement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SoumissionOfreFormOneControlleur extends Controller
{
    private $nbre_cham;
    private $cham_idm;
    private $post = 0;




    public function create()
    {
        return view('soumission_offre.soumission-offre1');
    }



    public function store(Request $request)
    {

        //les chambres sont equipées ?
        $cham_equip=$request->equipements1;

        $TYPE_CHAMBRE="chambre";
        $TYPE_APPARTEMENT="appartement";
        $TYPE_STUDIO="studio";
        $CHAMBRE_IDENTIQUES="oui";
        $CHAMBRE_EQUIPEE="oui";


        //nombre de chambre entrer par le user
        $nombre_chambre = $request->chambre;

        // les chambre sont identiques ?
        $chambres_idem = $request->chambres;

        /*
        |--------------------------------------------------------------------------
        | section de la validation des données
        |--------------------------------------------------------------------------
        */

        $request->validate([
            'titre_annonce' => ['required', 'string', 'max:255'],
            'description_annonce' => ['required', 'string'],
            'quartier' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string'],
            'ville' => ['required', 'string'],
        ]);


        // id de utilisateur connecté
        $id = Auth::guard('proprietaire')->user()->id;

        //tye d logement <<chambres,studio,appartement>>
        $type_logement = $request->type_logement;
        // chaine des id qui sera traiter
        $chaine_tab = "";

        /*
        * comme Type de logement:chambre:
        *
        */
        /*
        |--------------------------------------------------------------------------
        |
        |--------------------------------------------------------------------------
        */

        if ($type_logement == $TYPE_CHAMBRE) {



            //si les chambres sont toutes identiques
            if ($chambres_idem == $CHAMBRE_IDENTIQUES) {

                // id du dernier logement
                //$ID_LOG=Logement::latest()->first()->id;

                //les chambres sont equipées
                if ($cham_equip == $CHAMBRE_EQUIPEE) {

                    $request->validate([
                        'equipments1.*' => ['required', 'string', 'min:1'],

                    ]);

                    // la liste des equipement n'est nulle
                    if ($request->equipments1 != null) {
                        // on stock l'offre
                        $this->storeOffre($request);
                        // on stock le logement

                        $ID_LOG = $this->storeLogement($request);
                        $list_equip = $request->equipments1;

                        $cpt = 0; // variable de compteur
                        $chaine_tab = "";
                        // boucler pour inserer autant de chambre
                        for ($cpt; $cpt < $nombre_chambre; $cpt++) {
                            $id_chambre = $this->storeChambre($request, $ID_LOG);
                            foreach ($list_equip as $equip) {

                                //id de chaque equipement
                                $id = Equipement::where('nom', '=', $equip)->first()->id;
                                chambre_equipement::create(['chambre_id' => $id_chambre, 'equipement_id' => $id]);
                            }

                            // mettre a jour la chaine des id pour recuperer a l"etape 2

                            if ($chaine_tab == "") {
                                $chaine_tab = strval($id_chambre);
                            } else {
                                $chaine_tab = $chaine_tab . '.' . strval($id_chambre);
                            }
                        }

                        return view('soumission_offre.soumission-offre2', ['nb' => $nombre_chambre, 'ch_id' => true, 'id_log' => $ID_LOG, 'chaine' => $chaine_tab, "type_log" => $type_logement, 'id_appart' => 0]);
                    } else {
                        toastr()->error('Sélctionnez au moins un equipement');
                        return view('soumission_offre.soumission-offre1');
                    }
                }
                //les chambres ne sont pas equipées
                else {

                    // on stock l'offre
                    $this->storeOffre($request);
                    $ID_LOG = $this->storeLogement($request);
                    $cpt = 0; // variable de compteur
                    //dd($nombre_chambre);
                    // boucler pour inserer autant de chambre
                    for ($cpt; $cpt < $nombre_chambre; $cpt++) {
                        $id_chambre = $this->storeChambre($request, $ID_LOG);
                        // mettre a jour la chaine des id pour recuperer a l"etape 2

                        if ($chaine_tab == "") {
                            $chaine_tab = strval($id_chambre);
                        } else {
                            $chaine_tab = $chaine_tab . '.' . strval($id_chambre);
                        }
                    }
                    return view('soumission_offre.soumission-offre2', ['nb' => $nombre_chambre, 'ch_id' => true, 'id_log' => $ID_LOG, 'chaine' => $chaine_tab, "type_log" => $type_logement, 'id_appart' => 0]);
                }
            }
            //les chambres ne sont pas identiques
            else {
               // dd($request);
                // on stock l'offre
                $this->storeOffre($request);
                // on stock le logement

                $ID_LOG = $this->storeLogement($request);
                $count = 1;
                $chaine_tab == "";

                $nombre_chambre = $request->chambre;

                for ($count; $count < $nombre_chambre + 1; $count++) {
                    $cham_equip = $request->input('equipements' . strval($count));

                    if ($cham_equip == $CHAMBRE_EQUIPEE) {
                        if ($request->input('equipments' . strval($count)) != null) {
                            $id_chambre = $this->storeChambreVariable($request, $ID_LOG, $count);
                            $list_equip = $request->input('equipments' . strval($count));

                            foreach ($list_equip as $equip) {

                                $id = Equipement::where('nom', '=', $equip)->first()->id;
                                Chambre_equipement::create(['chambre_id' => $id_chambre, 'equipement_id' => $id]);
                            }

                            if ($chaine_tab == "") {
                                $chaine_tab = strval($id_chambre);
                            } else {
                                $chaine_tab = $chaine_tab . '.' . strval($id_chambre);
                            }

                            // return view('soumission_offre.soumission-offre2',['nb'=>$nombre_chambre,'id'=>0, 'ch_id'=> true,'chaine'=>$chaine_tab]);
                        } else {
                            ////toast
                        }
                    } else {
                        //  dd($nombre_chambre);
                        $id_chambre = $this->storeChambreVariable($request, $ID_LOG, $count);

                        if ($chaine_tab == "") {
                            $chaine_tab = strval($id_chambre);
                        } else {
                            $chaine_tab = $chaine_tab . '.' . strval($id_chambre);
                        }
                    }
                }
                return view('soumission_offre.soumission-offre2', ['nb' => $nombre_chambre, 'id_log' => $ID_LOG, 'ch_id' => false, 'chaine' => $chaine_tab, "type_log" => $type_logement, 'id_appart' => 0]);
            }
        }


        /*
        * cas  d'un appartement':
        *
        */

        if ($type_logement == $TYPE_APPARTEMENT) {
            $chaine_tab == "";
            $appart_equip=$request->equipements;
           // dd($request);
            if ($appart_equip=="oui")
            {
                //dd($request);
                if ($request->equipments != null) {
                     // on stock l'offre
                     $this->storeOffre($request);
                     // on stock le logement

                     $ID_LOG = $this->storeLogement($request);
                     $list_equip = $request->equipments;
                     $cpt = 0; // variable de compteur
                     $ID_App = $this->storeAppartement($request, $ID_LOG);


                     foreach ($list_equip as $equip) {
                        //id de chaque equipement
                        //dd($list_equip);
                        $id = Equipement::where('nom', '=', $equip)->first()->id;
                        Equiper2::create(['appartement_id' => $ID_App, 'equipement_id' => $id]);
                    }
                    if ($chambres_idem == $CHAMBRE_IDENTIQUES)
                    {

                        for ($cpt; $cpt < $nombre_chambre; $cpt++) {
                            $id_chambre = $this->storeChambreInAppart($request, $ID_LOG);
                            ///chambre appartient a appar
                            Inclure::create(['chambre_id' => $id_chambre, 'appartement_id' => $ID_App]);
                            if ($chaine_tab == "") {
                                $chaine_tab = strval($id_chambre);
                            } else {
                                $chaine_tab = $chaine_tab . '.' . strval($id_chambre);
                            }
                        }

                    }
                    else{
                         //dd($request);
                         $cpt = 1;
                        for ($cpt; $cpt < $nombre_chambre; $cpt++) {
                            $id_chambre = $this->storeChambreInAppartVariable($request, $ID_LOG, $cpt);
                            Inclure::create(['chambre_id' => $id_chambre, 'appartement_id' => $ID_App]);

                            if ($chaine_tab == "") {
                                $chaine_tab = strval($id_chambre);

                            } else {
                                $chaine_tab = $chaine_tab . '.' . strval($id_chambre);
                            }
                        }
                    }
                    return view('soumission_offre.soumission-offre2', ['nb' => $nombre_chambre, 'ch_id' => true, 'chaine' => $chaine_tab, 'id_log' => $ID_LOG, "type_log" => $type_logement, 'id_appart' => $ID_App]);

                }else{
                    ///erreur
                }
            }else{

                 // on stock l'offre
                 $this->storeOffre($request);
                 // on stock le logement

                 $ID_LOG = $this->storeLogement($request);

                 $cpt = 0; // variable de compteur
                 $ID_App = $this->storeAppartement($request, $ID_LOG);


                if ($chambres_idem == $CHAMBRE_IDENTIQUES)
                {

                    for ($cpt; $cpt < $nombre_chambre; $cpt++) {
                        $id_chambre = $this->storeChambreInAppart($request, $ID_LOG);
                        ///chambre appartient a appar
                        Inclure::create(['chambre_id' => $id_chambre, 'appartement_id' => $ID_App]);
                        if ($chaine_tab == "") {
                            $chaine_tab = strval($id_chambre);
                        } else {
                            $chaine_tab = $chaine_tab . '.' . strval($id_chambre);
                        }
                    }

                }
                else{

                    for ($cpt; $cpt < $nombre_chambre; $cpt++) {
                        $id_chambre = $this->storeChambreInAppartVariable($request, $ID_LOG, $cpt);
                        Inclure::create(['chambre_id' => $id_chambre, 'appartement_id' => $ID_App]);

                        if ($chaine_tab == "") {
                            $chaine_tab = strval($id_chambre);

                        } else {
                            $chaine_tab = $chaine_tab . '.' . strval($id_chambre);
                        }
                    }
                }
                return view('soumission_offre.soumission-offre2', ['nb' => $nombre_chambre, 'ch_id' => true, 'chaine' => $chaine_tab, 'id_log' => $ID_LOG, "type_log" => $type_logement, 'id_appart' => $ID_App]);

            }

        }
    }



    // sauvegarder l'offre
    public function storeOffre(Request $request)
    {
        $id = Auth::guard('proprietaire')->user()->id;
        $offre = Offre::create([
            'titre' => $request->titre_annonce,
            'description' => $request->description_annonce,
            'status' => "En attente",
            'type' => $request->type_logement,
            'proprietaire_id' => $id,
        ]);
    }

        // sauvegarder le logement
        public function storeLogement(Request $request):int
        {
        $logement=Logement::insertGetId([
            'adresse'=>$request->adresse,
            'quartier'=>$request->quartier,
            'region'=>$request->region,
            'ville'=>$request->ville,
            'code_postal'=>$request->code_postal,
            'frequence_paie'=>$request->frequence_paie,
            'type'=>$request->type_logement,
            'offre_id'=>Offre::latest()->first()->id,

        ]);
        return $logement;
    }
    public function storeChambre(Request $request, int $ID_LOG): int
    {
        $idc = Chambre::insertGetId(
            [
                'prix' => $request->loyer1,
                'nbre_bain' => $request->salle_de_bain1,
                'disponibilite' => $request->disponibilite1,
                'meuble' => $request->meuble1,
                'superficie' => $request->surface_chambre1,
                'capacite' => $request->cap_chambre1,
                'equipe_bool'=>$request->equipements1,
                'logement_id' => $ID_LOG,
            ]
        );
        return $idc;
    }

    public function storeChambreVariable(Request $request, int $ID_LOG, int $i): int
    {
        $id = Chambre::insertGetId([
            'prix' => $request->input('loyer' . strval($i)),
            'nbre_bain' => $request->input('salle_de_bain' . strval($i)),
            'disponibilite' => $request->input('disponibilite' . strval($i)),
            'meuble' => $request->input('meuble' . strval($i)),
            'superficie' => $request->input('surface_chambre' . strval($i)),
            'capacite' => $request->input('cap_chambre' . strval($i)),
            'equipe_bool'=>$request->input('equipements' . strval($i)),
            'logement_id' => $ID_LOG,
        ]);
        return $id;
    }

    public function storeChambreInAppart(Request $request, int $ID_LOG): int
    {
        $idc = Chambre::insertGetId(
            [

                'superficie' => $request->surface_chambre1,
                'capacite' => $request->cap_chambre1,
                'logement_id' => $ID_LOG,
            ]
        );
        return $idc;
    }
    public function storeChambreInAppartVariable(Request $request, int $ID_LOG, int $i): int
    {
        $idc = Chambre::insertGetId(
            [
                'superficie' => $request->input('surface_chambre' . strval($i)),
                'capacite' => $request->input('cap_chambre' . strval($i)),
                'logement_id' => $ID_LOG,
            ]
        );
        return $idc;
    }

    public function storeAppartement(Request $request, int $ID_LOG): int
    {
        $idc = Appartement::insertGetId(
            [
                'prix' => $request->loyer,
                'nbre_bain' => $request->salle_de_bain,
                'disponibilite' => $request->disponibilite,
                'meuble' => $request->meuble,
                'num' => $request->numero,
                'etage' => $request->etage,
                'nombre_chambre' => $request->chambre,
                'equipe_bool'=>$request->equipements1,
                'logement_id' => $ID_LOG,
            ]
        );
        return $idc;
    }
}
