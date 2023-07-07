<?php

namespace App\Http\Controllers\Proprietaire;

use App\Models\Offre;
use App\Models\Logement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SoumissionOfreFormOneControlleur extends Controller
{

    public function create()
    {
        return view('soumission_offre.soumission-offre1');
    }
    public function store(Request $request)
    {
        $nb=$request->chambre;
        $request->validate([
            'titre_annonce' => ['required', 'string', 'max:255'],
            'description_annonce' => ['required', 'string'],
            'adresse' => ['required', 'string'],
            'quartier' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string'],
            'ville' => ['required', 'string'],
            'quartier' => ['required', 'string', 'max:255'],

        ]);

         //variables qui vont conditionnées les traitements
         //dd($request);
         $id=Auth::guard('proprietaire')->user()->id;
         $chambres_idem=$request->chambres;
         $type_logement=$request->type_logement;
         //si les chambres sont toutes identique
        if($chambres_idem=="oui")
        {
            //enregistrer offre
            $offre=Offre::create([
                'titre'=>$request->titre_annonce,
                'description'=>$request->description_annonce,
                'status'=>"En attente de validation",
                'proprietaire_id'=>$id,]);

            //compteur

            $i=0;
            for($i=0;$i<$nb;$i++)
            {
                $logement=Logement::create([
                    'adresse'=>$request->adresse,
                    'quartier'=>$request->quartier,
                    'region'=>$request->region,
                    'ville'=>$request->ville,
                    'code_postal'=>$request->code_postal,
                    'frequence_paie'=>$request->frequence_paie,
                    'prix'=>$request->loyer1,
                    'meuble'=>$request->meuble1,
                    'statut'=>"Disponible",
                ]);
            }


        }
        else{
            dd($request);
        }

        return view('soumission_offre.soumission-offre1');
    }
}
