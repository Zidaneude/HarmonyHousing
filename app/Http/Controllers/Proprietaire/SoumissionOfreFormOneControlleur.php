<?php

namespace App\Http\Controllers\Proprietaire;

use App\Models\Offre;
use App\Models\Chambre;
use App\Models\Logement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SoumissionOfreFormOneControlleur extends Controller
{
    private $nbre_cham;
    private $cham_idm;
    private $post=0;

    public function create()
    {
        return view('soumission_offre.soumission-offre1');
    }
    public function store(Request $request)
    {
        //dd($request);

        $TYPE_CHAMBRE="chambre";
        $TYPE_APPARTEMENT="Appartement";
        $TYPE_STUDIO="Studio";
        $CHAMBRE_IDENTIQUES="oui";

        //nombre de chambre
        $nombre_chambre=$request->chambre;
        // les chambre sont identiiques ?
        $chambres_idem=$request->chambres;


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


         $id=Auth::guard('proprietaire')->user()->id;

         $type_logement=$request->type_logement;


        // sauvegarder l'offre
         $offre=Offre::create([
            'titre'=>$request->titre_annonce,
            'description'=>$request->description_annonce,
            'status'=>"En attente de validation",
            'proprietaire_id'=>$id,]);

         //sauvegarder le logement
            $logement=Logement::create([
                'adresse'=>$request->adresse,
                'quartier'=>$request->quartier,
                'region'=>$request->region,
                'ville'=>$request->ville,
                'code_postal'=>$request->code_postal,
                'frequence_paie'=>$request->frequence_paie,
                'offre_id'=>Offre::latest()->first()->id,

            ]);


            $tab=array();
            $tab[0]=0;
            $chaine_tab="";
        // cas  de chambre:
         if($type_logement==$TYPE_CHAMBRE)
         {
            //si les chambres sont toutes identique

            if($chambres_idem==$CHAMBRE_IDENTIQUES)
            {

                $id=Logement::latest()->first()->id;
                $cpt=0;
                for($cpt;$cpt<$nombre_chambre;$cpt++)
                {
                    $idc = Chambre::insertGetId(
                        [ 'prix'=>$request->loyer1,
                        'nbre_bain'=>$request->salle_de_bain1,
                        'disponibilite'=>$request->disponibilite1,
                        'titre'=>$request->titre_chambre1,
                        'meuble'=>$request->meuble1,
                        'superficie'=>$request->surface_chambre1,
                        'capacite'=>$request->cap_chambre1,
                        'logement_id'=>$id,]
                    );

                   /* $chambre=Chambre::create([
                        'prix'=>$request->loyer1,
                        'nbre_bain'=>$request->salle_de_bain1,
                        'disponibilite'=>$request->disponibilite1,
                        'titre'=>$request->titre_chambre1,
                        'meuble'=>$request->meuble1,
                        'superficie'=>$request->surface_chambre1,
                        'capacite'=>$request->cap_chambre1,
                        'logement_id'=>$id,
                    ]);*/

                   // $last_id=Chambre::latest()->first()->id;

                    if($chaine_tab=="")
                    {
                        $chaine_tab=strval($idc);
                    }
                    else
                    {
                        $chaine_tab=$chaine_tab.'.'.strval($idc);
                    }
                }
                //dd($chaine_tab);
                return view('soumission_offre.soumission-offre2',['nb'=>$nombre_chambre, 'ch_id'=> true,'id'=>$id,'chaine'=>$chaine_tab]);

            }
            /// les chambres ne sont pas identiques
            else
            {
                $id=Logement::latest()->first()->id;
                $i=1;

                for($i;$i<$nombre_chambre+1;$i++)
                {

                    $last_id=Chambre::insertGetId([
                        'prix'=>$request->input('loyer'.strval($i)),
                        'nbre_bain'=>$request->input('salle_de_bain'.strval($i)),
                        'disponibilite'=>$request->input('disponibilite'.strval($i)),
                        'titre'=>$request->input('titre_chambre'.strval($i)),
                        'meuble'=>$request->input('meuble'.strval($i)),
                        'superficie'=>$request->input('surface_chambre'.strval($i)),
                        'capacite'=>$request->input('cap_chambre'.strval($i)),
                        'logement_id'=>$id,
                    ]);
                   // $last_id=Chambre::latest()->first()->id;
                    if($chaine_tab=="")
                    {
                        $chaine_tab=strval($last_id);
                    }
                    else
                    {
                        $chaine_tab=$chaine_tab.'.'.strval($last_id);
                    }


                }
                //return redirect()->route('soumission.offre.step2.create')->with(['nb'=>$nombre_chambre, 'ch_id'=> false]);
                return view('soumission_offre.soumission-offre2',['nb'=>$nombre_chambre, 'ch_id'=> false,'id'=>$id,'chaine'=>$chaine_tab]);
            }
         }


        /*
        * cas  d'un appartement':
        *
        */

        if($chambres_idem=="oui")
        {
            //enregistrer offre


            //compteur






        }
        else{
            //dd($chambres_idem);
           // return view('soumission_offre.soumission-offre2',['nb'=>$nbre_cham, 'ch_id'=> false]);
        }


    }

    public function t()
    {
        return view('soumission_offre.soumission-offre2');
    }
}

