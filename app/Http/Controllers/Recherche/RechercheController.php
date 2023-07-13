<?php

namespace App\Http\Controllers\Recherche;

use App\Models\Logement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RechercheController extends Controller
{
    //Fonction qui recherche un logement par la ville uniquement
    public function find(Request $request)
    {
        $ville=$request->ville;

        $logements1=DB::table('logements')
         ->join('chambres','logements.id','=','chambres.logement_id')
         ->join('offres','offres.id','=','logements.offre_id')
         ->where('offres.status', '=', "Approuvée")
         ->where('logements.ville', 'like', "%{$ville}%")
         ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
         ->get();

         $logements2=DB::table('logements')
         ->join('appartements','logements.id','=','appartements.logement_id')
         ->join('offres','offres.id','=','logements.offre_id')
         ->where('offres.status', '=', "Approuvée")
         ->where('ville', 'like', "%{$ville}%")
         ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
         ->get();

        $logements=$logements1->merge($logements2);
        //dd($logements);
        return view('recherche.affichage-resultats', ['logements' => $logements]);
    }


    //Fonction qui recherche un logement par la ville, le budget max et le type de logement(appartment ou chambre)

    public function Recherche(Request $request){


      //  dd($request);
        $city = $request->ville;
        $budget_max = $request->budget_max;
        $type = $request->type;

       // 1 uniquement avec la ville
       if($city!=null && $budget_max==null && $type==null)
       {
            $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                 ->where('logements.ville', 'like', "%{$city}%")
                 ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
                 ->get();
            $logements2=DB::table('logements')
                 ->join('appartements','logements.id','=','appartements.logement_id')
                 ->join('offres','offres.id','=','logements.offre_id')
                 ->where('offres.status', '=', "Approuvée")
                 ->where('ville', 'like', "%{$city}%")
                 ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
                 ->get();

            $logements=$logements1->merge($logements2);
            //dd($logements);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
       }

       // 2 uniquement avec budget
       if($city==null && $budget_max!=null && $type==null)
       {
            $logements1=DB::table('logements')
                        ->join('chambres','logements.id','=','chambres.logement_id')
                        ->join('offres','offres.id','=','logements.offre_id')
                        ->where('offres.status', '=', "Approuvée")
                        ->where('prix','<=',$budget_max)
                        ->get();

            $logements2=DB::table('logements')
                        ->join('appartements','logements.id','=','appartements.logement_id')
                        ->join('offres','offres.id','=','logements.offre_id')
                        ->where('offres.status', '=', "Approuvée")
                        ->where('prix','<=',$budget_max)
                        ->get();

            $logements=$logements1->merge($logements2);
            //dd($logements);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
       }

       // 3 uniquement avec le type
       if($city==null && $budget_max==null && $type!=null)
       {
            if($type=='chambre')
            {
                $logements=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
                ->get();
                //dd($logements);
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }else{
                $logements=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
                ->get();
                //dd($logements);
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }

       }

       // 4 Avec la ville et le type
       if($city!=null && $budget_max==null && $type!=null)
       {
            if($type=="chambre")
            {
                $logements=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('ville', 'like', "%{$city}%")
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }else
            {
                $logements=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('ville', 'like', "%{$city}%")
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }

       }

       //5 Avec la ville et le budget
       if($city!=null && $budget_max!=null && $type==null)
       {

            $logements2=DB::table('logements')
                    ->join('chambres','logements.id','=','chambres.logement_id')
                    ->join('offres','offres.id','=','logements.offre_id')
                    ->where('offres.status', '=', "Approuvée")
                    ->where('prix','<=',$budget_max)
                    ->where('ville', 'like', "%{$city}%")
                    ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
                    ->get();

            $logements3=DB::table('logements')
                    ->join('appartements','logements.id','=','appartements.logement_id')
                    ->join('offres','offres.id','=','logements.offre_id')
                    ->where('offres.status', '=', "Approuvée")
                    ->where('prix','<=',$budget_max)
                    ->where('ville', 'like', "%{$city}%")
                    ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
                    ->get();

            $logements=$logements2->merge($logements3);
            return view('recherche.affichage-resultats', ['logements' => $logements]);

       }

         // 6 Avec le type et le budget
        if($city==null && $budget_max!=null && $type!=null)
        {
            if($type=="chambre")
            {
                $logements=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','<=',$budget_max)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }else
            {
                $logements=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','<=',$budget_max)
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }
        }
        // 7 avec tous les champs

        if($city!=null && $budget_max!=null && $type!=null)
        {
            if($type=="chambre")
            {
                $logements=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','<=',$budget_max)
                ->where('ville', 'like', "%{$city}%")
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }else
            {
                $logements=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','<=',$budget_max)
                ->where('ville', 'like', "%{$city}%")
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);

            }

        }


    }
//     ////
//     public function search(Request $request)
// {


//     //----------------------------------------------
//     $search = $request->input('search');

//     $type = $request->input('type');
//     $chambres = $request->input('chambres');
//     $budget_min = $request->input('budget_min', 0);
//     $budget_max = $request->input('budget_max', 0);
//     $meuble = $request->input('meuble');
//     $equipements = $request->input('equipements');
//     $frequence = $request->input('frequence');
//     $disponibilite = $request->input('disponibilite');



//     // on récupère les paramètres de recherche du formulaire
//     $search = $request->get('search');
//     $type = $request->get('type');
//     $chambres = $request->get('chambres');
//     $budget_min = $request->get('budget_min', 0);
//     $budget_max = $request->get('budget_max', 0);
//     $meuble = $request->get('meuble', '%');
//     $equipements = $request->get('equipements');
//     $frequence = $request->get('frequence');
//     $disponibilite = $request->get('disponibilite');

//     // on crée une variable qui contient la requête commune à tous les logements
//     $logements = DB::table('logements')
//         ->join('offres','offres.id','=','logements.offre_id')
//         ->where('offres.status', '=', "Approuvée")
//         ->when($budget_min, function ($query, $budget_min) {
//             return $query->where('prix', '>=', $budget_min);
//         })
//         ->when($budget_max, function ($query, $budget_max) {
//             return $query->where('prix', '<=', $budget_max);
//         })
//         ->when($meuble, function ($query, $meuble) {
//             return $query->where('meuble', 'like', $meuble);
//         })

//         ->where('quartier', 'like', '%' . $search . '%')
//         ->when($frequence, function ($query, $frequence) {
//             return $query->where('frequence_paie', '<=', $frequence);
//         })
//         ->when($equipements, function ($query, $equipements) {
//             return $query->where('equipe_bool', '<=', $equipements);
//         })
//         ->when($disponibilite, function ($query, $disponibilite) {
//             return $query ->where('disponibilite', '>=', $disponibilite);
//         })
//         ->where('ville', 'like', '%' . $search . '%')
//         ->join('chambres','logements.id','=','chambres.logement_id')
//             ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
//             ->get();
//             return view('recherche.affichage-resultats', ['logements' => $logements]);

//     // on ajoute les conditions spécifiques selon le type de logement
//     /*
//     if($type=="chambre")
//     {
//         $logements = $query
//             ->join('chambres','logements.id','=','chambres.logement_id')
//             ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
//             ->get();
//     }
//     else
//     {
//         $logements = $query
//             ->join('appartements','logements.id','=','appartements.logement_id')
//             ->where('nombre_chambre', '=', $chambres )
//             ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
//             ->get();
//     }

//     // on renvoie la vue avec les logements trouvés
//     return view('recherche.affichage-resultats', ['logements' => $logements]);*/
// }

public function search(Request $request) {
    // Récupération des paramètres de recherche du formulaire
    $search = $request->input('search', '%');
    $type = $request->input('type', '%');
    $chambres = $request->input('chambres', '%');

    $budget_min =0;// $request->input('budget_min', 0);


    $budget_min1 =$request->input('budget_min');
    if( $budget_min1!=null)
    {
        $budget_min =$request->input('budget_min');
    }
    $budget_max =111111000000000;
    $budget_max1 = $request->input('budget_max');
    if( $budget_min1!=null){

        $budget_max = $request->input('budget_max' );
    }

    //
    $meuble ="non";
    $meuble1 = $request->input('meuble', '%');
    if( $meuble1!=null)
    {
        $meuble = $request->input('meuble');
    }

    $equipements = $request->input('equipements', '%');
    $frequence = $request->input('frequence', '%');
    $disponibilite = $request->input('disponibilite', '%');

    // Construction de la requête
    $logements = DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")


        //->where('quartier', 'like', "%{$search}%")
        // ->where('logements.frequence_paie', 'like', $frequence)
        // ->where('logements.equipe_bool', 'like', $equipements)
        // ->where('logements.disponibilite', '>=', $disponibilite)
        ->where('logements.ville', 'like', "%{$search}%")
        ->where('meuble', 'like', $meuble)
        ->where('prix', '>=', $budget_min)
        ->where('prix', '<=', $budget_max)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1')
        ->get();
        return view('recherche.affichage-resultats', ['logements' => $logements]);

/*
    if($type === "chambre") {
        $logements = $logementsQuery
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->select('logements.prix','logements.quartier','logements.ville','logements.type','logements.meuble','logements.disponibilite','logements.photos1')
            ->get();
    } else {
        $logements = $logementsQuery
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->where('appartements.nombre_chambre', 'like', $chambres)
            ->select('logements.prix','logements.quartier','logements.ville','logements.type','logements.meuble','logements.nombre_chambre','logements.disponibilite','logements.photos1')
            ->get();*/
    }

   // return view('recherche.affichage-resultats', ['logements' => $logements]);
}



