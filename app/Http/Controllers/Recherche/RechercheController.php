<?php

namespace App\Http\Controllers\Recherche;
//include('./UtilitySearch.php');
use App\SearchUtils;
use App\Models\Logement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;





class RechercheController extends Controller
{
    //Fonction qui recherche un logement par la ville uniquement
    public function find(Request $request)
    {
        $request->flash();
        $ville=$request->ville;

        $logements1=DB::table('logements')
         ->join('chambres','logements.id','=','chambres.logement_id')
         ->join('offres','offres.id','=','logements.offre_id')
         ->where('offres.status', '=', "Approuvée")
         ->where('logements.ville', 'like', "%{$ville}%")
         ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
         ->get();

         $logements2=DB::table('logements')
         ->join('appartements','logements.id','=','appartements.logement_id')
         ->join('offres','offres.id','=','logements.offre_id')
         ->where('offres.status', '=', "Approuvée")
         ->where('ville', 'like', "%{$ville}%")
         ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1','appartements.id')
         ->get();

        $logements=$logements1->merge($logements2);
        return view('recherche.affichage-resultats', ['logements' => $logements]);
    }


    //Fonction qui recherche un logement par la ville, le budget max et le type de logement(appartment ou chambre)

    public function Recherche(Request $request){

        $city = $request->ville;
        $budget_max = $request->budget_max;
        $type = $request->type;
        $request->flash();

       // 1 uniquement avec la ville
       if($city!=null && $budget_max==null && $type==null)
       {
            $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                 ->where('ville', 'like', "%{$city}%")
                 ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
                 ->get();
            $logements2=DB::table('logements')
                 ->join('appartements','logements.id','=','appartements.logement_id')
                 ->join('offres','offres.id','=','logements.offre_id')
                 ->where('offres.status', '=', "Approuvée")
                 ->where('ville', 'like', "%{$city}%")
                 ->select('prix','quartier','ville','logements.type','meuble','disponibilite','nombre_chambre','logements.photos1','appartements.id')
                 ->get();

            $logements=$logements1->merge($logements2);
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
                        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
                        ->get();

            $logements2=DB::table('logements')
                        ->join('appartements','logements.id','=','appartements.logement_id')
                        ->join('offres','offres.id','=','logements.offre_id')
                        ->where('offres.status', '=', "Approuvée")
                        ->where('prix','<=',$budget_max)
                        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','appartements.id')
                        ->get();

            $logements=$logements1->merge($logements2);
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
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }else{
                $logements=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1','appartements.id')
                ->get();
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
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }else
            {
                $logements=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('ville', 'like', "%{$city}%")
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1','appartements.id')
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
                    ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
                    ->get();

            $logements3=DB::table('logements')
                    ->join('appartements','logements.id','=','appartements.logement_id')
                    ->join('offres','offres.id','=','logements.offre_id')
                    ->where('offres.status', '=', "Approuvée")
                    ->where('prix','<=',$budget_max)
                    ->where('ville', 'like', "%{$city}%")
                    ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1','appartements.id')
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
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);
            }else
            {
                $logements=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','<=',$budget_max)
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1','appartements.id')
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
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
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
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1','appartements.id')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);

            }

        }
        else {
            return redirect()->route('recherche.from.homme');
        }


    }

public function search(Request $request)
{
    $request->flash();

    $search = $request->input('search');
    $type = $request->input('type');
    $budget_min = $request->input('budget_min');
    $budget_max = $request->input('budget_max');
    $disponibilite = $request->input('disponibilite');


    ///single search

    $single_type= $search==null && $type!=null && $budget_min==null && $budget_max==null && $disponibilite==null;
    $single_villeOrQuartier= $search!=null && $type==null && $budget_min==null && $budget_max==null && $disponibilite==null;
    $single_budget_min= $search==null && $type==null && $budget_min!=null && $budget_max==null && $disponibilite==null;
    $single_budget_max= $search==null && $type==null && $budget_min==null && $budget_max!=null && $disponibilite==null;
    $single_disponibilite= $search==null && $type==null && $budget_min==null && $budget_max==null && $disponibilite!=null;

    //more criteres (2)

    $type_And_villeOrQuartier= $search!=null && $type!=null && $budget_min==null && $budget_max==null && $disponibilite==null;
    $type_And_budget_min= $search==null && $type!=null && $budget_min!=null && $budget_max==null && $disponibilite==null;
    $type_And_budget_max= $search==null && $type!=null && $budget_min==null && $budget_max!=null && $disponibilite==null;
    $type_And_disponibilite= $search==null && $type!=null && $budget_min==null && $budget_max==null && $disponibilite!=null;

    $ville_And_budget_min= $search!=null && $type==null && $budget_min!=null && $budget_max==null && $disponibilite==null;
    $ville_And_budget_max= $search!=null && $type==null && $budget_min==null && $budget_max!=null && $disponibilite==null;
    $ville_And_disponibilite= $search!=null && $type==null && $budget_min==null && $budget_max==null && $disponibilite!=null;

    $disponibilite_And_budget_max= $search==null && $type==null && $budget_min==null && $budget_max!=null && $disponibilite!=null;
    $disponibilite_And_budget_min= $search==null && $type==null && $budget_min!=null && $budget_max==null && $disponibilite!=null;

    $budget_max_And_budget_min= $search==null && $type==null && $budget_min!=null && $budget_max!=null && $disponibilite==null;



    ///03 criteres
    $max_min_dispo= $search==null && $type==null && $budget_min!=null && $budget_max!=null && $disponibilite!=null;
    $ville_min_dispo= $search!=null && $type==null && $budget_min!=null && $budget_max==null && $disponibilite!=null;
    $ville_max_dispo= $search!=null && $type==null && $budget_min==null && $budget_max!=null && $disponibilite!=null;
    $type_ville_min= $search!=null && $type!=null && $budget_min!=null && $budget_max==null && $disponibilite==null;
   // $max_min_dispo= $search==null && $type==null && $budget_min!=null && $budget_max!=null && $disponibilite!=null;
    //
    $type_ville_max= $search!=null && $type!=null && $budget_min==null && $budget_max!=null && $disponibilite==null;
    $type_ville_dispo= $search!=null && $type!=null && $budget_min==null && $budget_max==null && $disponibilite!=null;
    $type_max_min= $search==null && $type!=null && $budget_min!=null && $budget_max!=null && $disponibilite==null;

    //04 criteres
    $type_ville_min_dispo= $search!=null && $type!=null && $budget_min!=null && $budget_max==null && $disponibilite!=null;
    $type_ville_max_dispo= $search!=null && $type!=null && $budget_min!=null && $budget_max==null && $disponibilite!=null;
    $type_dispo_max_min= $search==null && $type!=null && $budget_min!=null && $budget_max!=null && $disponibilite!=null;
    $type_ville_max_min= $search!=null && $type!=null && $budget_min!=null && $budget_max!=null && $disponibilite==null;
    $dispo_ville_max_min= $search!=null && $type==null && $budget_min!=null && $budget_max!=null && $disponibilite!=null;
    $dispo_ville_max_type= $search!=null && $type!=null && $budget_min==null && $budget_max!=null && $disponibilite!=null;

    $all= $search!=null && $type!=null && $budget_min!=null && $budget_max!=null && $disponibilite!=null;


    /*
    *appels des fonctions
    */

    //1
    if($single_type)
    {
            $logements= SearchUtils::searchType($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //2
    if($single_villeOrQuartier)
    {
            $logements= SearchUtils::searchVileOrQuartier($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //3
    if($single_budget_min)
    {
            $logements= SearchUtils::searchBudgetMin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //4
    if($single_budget_max)
    {
            $logements= SearchUtils::searchBudgetMax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //5
    if($single_disponibilite)
    {
            $logements= SearchUtils::Disponibilite($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //6

    //7
    if( $budget_max_And_budget_min)
    {
            $logements= SearchUtils::search_BudgetMin_And_BudgetMax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //8
    if( $type_And_villeOrQuartier)
    {
            $logements= SearchUtils::searchType_and_Ville($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //9
    if( $type_And_budget_min)
    {
            $logements= SearchUtils::searchType_and_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //10
    if($type_And_budget_max)
    {
            $logements= SearchUtils::searchType_and_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //11
    if($type_And_disponibilite)
    {
            $logements= SearchUtils::searchdisponibilite_type($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //12
    if($ville_And_budget_min)
    {
            $logements= SearchUtils::searchVille_and_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //13
    if($ville_And_budget_max)
    {
            $logements= SearchUtils::searchQuartier_and_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //14
    if($ville_And_disponibilite)
    {
            $logements= SearchUtils::searchDisponibilite_ville($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //15
    if($disponibilite_And_budget_max)
    {
            $logements= SearchUtils::searchDisponibilite_and_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //16
    if($disponibilite_And_budget_min)
    {
            $logements= SearchUtils::searchDisponibilite_and_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }

    //////03 criteres
    //17
    if( $max_min_dispo)
    {
            $logements= SearchUtils::searchDisponibilite_Bmin_and_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //18
    if($ville_min_dispo)
    {
            $logements= SearchUtils::searchDisponibilite_ville_and_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //19
    if( $ville_max_dispo)
    {
            $logements= SearchUtils::searchDisponibilite_ville_and_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //20
    if( $type_ville_min)
    {
            $logements= SearchUtils::searchVille_type_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //21
    if( $max_min_dispo)
    {
            $logements= SearchUtils::searchDisponibilite_Bmin_and_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }



    ////04 criteres





    //23
    if($type_ville_min_dispo)
    {
            $logements= SearchUtils::ssearchdisponibilite_type_ville_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //24
    if( $type_dispo_max_min)
    {
            $logements= SearchUtils::searchdisponibilite_type_ville_Bmin_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    if($type_ville_max_dispo)
    {
            $logements= SearchUtils::searchdisponibilite_type_ville_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //25
    if(  $type_ville_max_min)
    {
            $logements= SearchUtils::searchVille_type_Bmin_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //26
    if( $dispo_ville_max_min)
    {
            $logements= SearchUtils::searchDisponibilite_and_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    //27
    if( $dispo_ville_max_type)
    {
            $logements= SearchUtils::searchDisponibilite_and_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
     //28
    if($type_ville_max)
    {
            $logements= SearchUtils::searchVille_type_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    if($type_ville_dispo)
    {
            $logements= SearchUtils::searchdisponibilite_type_ville($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    if( $type_max_min)
    {
            $logements= SearchUtils::search_type_Bmax_and_Bmin($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }



    /////all

    if($all)
    {
            $logements= SearchUtils::searchdisponibilite_type_ville_Bmin_Bmax($request);
            return view('recherche.affichage-resultats', ['logements' => $logements]);
    }
    else{
        $logements1=DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
        ->get();

        $logements2=DB::table('logements')
        ->join('appartements','logements.id','=','appartements.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1','appartements.id')
        ->get();

       $logements=$logements1->merge($logements2);
       return view('recherche.affichage-resultats', ['logements' => $logements]);
    }












    }


}



