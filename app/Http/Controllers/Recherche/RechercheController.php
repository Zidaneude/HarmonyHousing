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
    public function search(Request $request)
    {
        // on récupère les paramètres de recherche du formulaire
        $search = $request->input('search');
        $type = $request->input('type');
        $chambres = $request->input('chambres');
        $budget_min = $request->input('budget_min');
        $budget_max = $request->input('budget_max');
        $meuble = $request->input('meuble');
        $equipements = $request->input('equipements');
        $frequence = $request->input('frequence');
        $disponibilite = $request->input('disponibilite');

        if($type=="chambre")
        {
            $logements=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix', '>=', "$budget_min")
                ->where('prix', '<=', "$budget_max")
                ->where('meuble', 'like', "$meuble")
                ->where('quartier', 'like', "$search")
                ->where('frequence_paie', '<=', "$frequence")
                ->where('equipe_bool', '<=', " $equipements")
                ->where('disponibilite', '>=', "$disponibilite")
                ->where('ville', 'like', "%{$search}%")
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','logements.photos1')
                ->get();
                return view('recherche.affichage-resultats', ['logements' => $logements]);

        }

        if($type=="appartement")
        {
            $logements=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('prix', '>=', "$budget_min")
            ->where('prix', '<=', "$budget_max")
            ->where('meuble', 'like', "$meuble")
            ->where('quartier', 'like', "$search")
            ->where('frequence_paie', '<=', "$frequence")
            ->where('equipe_bool', '<=', " $equipements")
            ->where('disponibilite', '>=', "$disponibilite")
            ->where('ville', 'like', "%{$search}%")
            ->where('nombre_chambre', '=', $chambres )
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
            ->get();
            return view('recherche.affichage-resultats', ['logements' => $logements]);




        }

        $logements1=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('prix', '>=', "$budget_min")
            ->where('prix', '<=', "$budget_max")
            ->where('meuble', 'like', "$meuble")
            ->where('quartier', 'like', "$search")
            ->where('frequence_paie', '<=', "$frequence")
            ->where('equipe_bool', '<=', " $equipements")
            ->where('disponibilite', '>=', "$disponibilite")
            ->where('ville', 'like', "%{$search}%")
            ->where('nombre_chambre', '=', $chambres )
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','nombre_chambre','logements.photos1')
            ->get();

        $logements2=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('prix', '>=', "$budget_min")
            ->where('prix', '<=', "$budget_max")
            ->where('meuble', 'like', "$meuble")
            ->where('quartier', 'like', "$search")
            ->where('frequence_paie', '<=', "$frequence")
            ->where('equipe_bool', '<=', " $equipements")
            ->where('disponibilite', '>=', "$disponibilite")
            ->where('ville', 'like', "%{$search}%")
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','logements.photos1')
            ->get();

        $logements=$logements1->merge($logements2);
        return view('recherche.affichage-resultats', ['logements' => $logements]);
    }


}
