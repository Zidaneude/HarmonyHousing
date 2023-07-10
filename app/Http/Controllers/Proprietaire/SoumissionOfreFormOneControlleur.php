<?php

namespace App\Http\Controllers\Proprietaire;

use App\Models\Offre;
use App\Models\Chambre;
use App\Models\Equiper;
use App\Models\Inclure;
use App\Models\Logement;
use App\Models\Equipement;
use App\Models\Appartement;
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
        //les chambres sont equipées ?
        $cham_equip=$request->equipements1;
       // dd($cham_equip);
        $list_equip=$request->equipments1;

        $TYPE_CHAMBRE="chambre";
        $TYPE_APPARTEMENT="appartement";
        $TYPE_STUDIO="studio";
        $CHAMBRE_IDENTIQUES="oui";
        $ID_LOG=0;

        //nombre de chambre entrer par le user
        $nombre_chambre=$request->chambre;

        // les chambre sont identiques ?
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


         // id de utilisateur connecté
         $id=Auth::guard('proprietaire')->user()->id;

         //tye d logement <<chambres,studio,appartement>>
         $type_logement=$request->type_logement;


        /*
        *  sauvegarder l'offre
        */

         $offre=Offre::create([
            'titre'=>$request->titre_annonce,
            'description'=>$request->description_annonce,
            'status'=>"En attente de validation",
            'proprietaire_id'=>$id,]);

        /*
        *  sauvegarder le logement
        */

            $logement=Logement::create([
                'adresse'=>$request->adresse,
                'quartier'=>$request->quartier,
                'region'=>$request->region,
                'ville'=>$request->ville,
                'code_postal'=>$request->code_postal,
                'frequence_paie'=>$request->frequence_paie,
                'offre_id'=>Offre::latest()->first()->id,

            ]);

        // chaine des id qui sera traiter
            $chaine_tab="";



        /*
        *  cas  de chambre:comme type de logement4
        *
        */



         if($type_logement==$TYPE_CHAMBRE)
         {
            dd($request);
            //si les chambres sont toutes identiques

            if($chambres_idem==$CHAMBRE_IDENTIQUES)
            {
                // id du dernier logement
                $ID_LOG=Logement::latest()->first()->id;
                $cpt=0; // variable de compteur

                // boucler pour inserer autant de chambre
                for($cpt;$cpt<$nombre_chambre;$cpt++)
                {
                    $idc = Chambre::insertGetId(
                        [ 'prix'=>$request->loyer1,
                        'nbre_bain'=>$request->salle_de_bain1,
                        'disponibilite'=>$request->disponibilite1,
                       // 'titre'=>$request->titre_chambre1,
                        'meuble'=>$request->meuble1,
                        'superficie'=>$request->surface_chambre1,
                        'capacite'=>$request->cap_chambre1,
                        'logement_id'=> $ID_LOG,]
                    );

                    /*
                    * mettre à jour la table pivot <<equiper> pour etablie le binding entre la
                    * chambre et equipement
                    *
                    */
                    if( $cham_equip=='oui')
                    {
                        foreach ($list_equip as $equip)
                        {
                            //id de chaque equip
                            $id=Equipement::where('nom','=',$equip)->first()->id;
                            Equiper::create(['chambre_id'=>$idc,'equipement_id'=>$id]);

                        }
                    }

                    /*
                    * mettre a jour la chaine des id pour recuperer a l"etape 2
                    *
                    */
                    if($chaine_tab=="")
                    {
                        $chaine_tab=strval($idc);
                    }
                    else
                    {
                        $chaine_tab=$chaine_tab.'.'.strval($idc);
                    }
                }
                //retourne le view les données utilent pour les traitement ulterieur
                return view('soumission_offre.soumission-offre2',['nb'=>$nombre_chambre, 'ch_id'=> true,'id'=>$id,'chaine'=>$chaine_tab]);

            }
            /*
            * les chambres ne sont pas identiques
            */

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
                        //'titre'=>$request->input('titre_chambre'.strval($i)),
                        'meuble'=>$request->input('meuble'.strval($i)),
                        'superficie'=>$request->input('surface_chambre'.strval($i)),
                        'capacite'=>$request->input('cap_chambre'.strval($i)),
                        'logement_id'=> $ID_LOG,
                    ]);


                    $equipement=$request->input('equipments'.strval($i));
                    if( $cham_equip=='oui')
                    {
                        foreach ($equipement as $equip)
                        {
                            //id de chaque equip
                            $id=Equipement::where('nom','=',$equip)->first()->id;
                            Equiper::create(['chambre_id'=>$last_id,'equipement_id'=>$id]);

                        }
                    }
                    if($chaine_tab=="")
                    {
                        $chaine_tab=strval($last_id);
                    }
                    else
                    {
                        $chaine_tab=$chaine_tab.'.'.strval($last_id);
                    }


                }
                //retourne le view les données utilent pour les traitement ulterieur
                return view('soumission_offre.soumission-offre2',['nb'=>$nombre_chambre, 'ch_id'=> false,'id'=>$id,'chaine'=>$chaine_tab]);
            }
         }


        /*
        * cas  d'un appartement':
        *
        */

         if($type_logement==$TYPE_APPARTEMENT)
         {
              $ID_LOG=Logement::latest()->first()->id;
                //dd($request);
                //insertion de l'appartement
                $idc = Appartement::insertGetId([
                    'prix'=>$request->loyer,
                    'nbre_bain'=>$request->salle_de_bain,
                    'disponibilite'=>$request->disponibilite,
                    'meuble'=>$request->meuble,
                    'nombre_chambre'=>$request->chambre,
                    'logement_id'=>$ID_LOG,]
                );

            if($chambres_idem==$CHAMBRE_IDENTIQUES)
            {
                // id du dernier appartement
                $id=Appartement::latest()->first()->id;
                $cpt=0; // variable de compteur

                // boucler pour inserer autant de chambre
                for($cpt;$cpt<$nombre_chambre;$cpt++)
                {
                    $idc = Chambre::insertGetId(
                        [
                        'superficie'=>$request->surface_chambre1,
                        'capacite'=>$request->cap_chambre1,
                        'logement_id'=>$ID_LOG,
                        ]
                    );

                    ///chambre appartient a appar
                    Inclure::create([
                        'chambre_id'=>$idc,'appartement_id'=>$id
                    ]);

                     /*
                    * mettre à jour la table pivot <<equiper> pour etablie le binding entre la
                    * chambre et equipement
                    *
                    */
                    if( $cham_equip=='oui')
                    {
                        foreach ($list_equip as $equip)
                        {
                            //id de chaque equip
                            $id=Equipement::where('nom','=',$equip)->first()->id;
                            Equiper::create(['chambre_id'=>$idc,'equipement_id'=>$id]);

                        }
                    }

                    /*
                    * mettre a jour la chaine des id pour recuperer a l"etape 2
                    *
                    */
                    if($chaine_tab=="")
                    {
                        $chaine_tab=strval($idc);
                    }
                    else
                    {
                        $chaine_tab=$chaine_tab.'.'.strval($idc);
                    }
                }
                return view('soumission_offre.soumission-offre2',['nb'=>$nombre_chambre, 'ch_id'=> true,'id'=>$id,'chaine'=>$chaine_tab]);

            }
            else{

                $id=Appartement::latest()->first()->id;
                $i=1;
                for($i;$i<$nombre_chambre+1;$i++)
                {

                    $last_id=Chambre::insertGetId([

                        'superficie'=>$request->input('surface_chambre'.strval($i)),
                        'capacite'=>$request->input('cap_chambre'.strval($i)),
                        'logement_id'=>$ID_LOG,
                    ]);

                     ///chambre appartient a appar
                     Inclure::create([
                        'chambre_id'=>$idc,'appartement_id'=>$id
                    ]);

                    $equipement=$request->input('equipments'.strval($i));
                    if( $cham_equip=='oui')
                    {
                        foreach ($equipement as $equip)
                        {
                            //id de chaque equip
                            $id=Equipement::where('nom','=',$equip)->first()->id;
                            Equiper::create(['chambre_id'=>$last_id,'equipement_id'=>$id]);

                        }
                    }
                    if($chaine_tab=="")
                    {
                        $chaine_tab=strval($last_id);
                    }
                    else
                    {
                        $chaine_tab=$chaine_tab.'.'.strval($last_id);
                    }


                }
            }
            return view('soumission_offre.soumission-offre2',['nb'=>$nombre_chambre, 'ch_id'=> true,'id'=>$id,'chaine'=>$chaine_tab]);

         }



    }

    public function t()
    {
        return view('location.reservations-prop');
    }
}

