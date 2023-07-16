<?php
namespace App;
use App\Models\Logement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchUtils{


    // 1 uniquement avec le type
    public static function searchType(Request $request)
    {
        $type=$request->type;
        if($type=='chambre')
        {
            $logements=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
            ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
            ->get();

            return $logements;

        }else{
            $logements=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
            ->get();
            return $logements;
        }
    }
    // 2 uniquement avec la ville
    public static function searchVileOrQuartier(Request $request)
    {
            $search = $request->search;
            $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('logements.ville', 'like', "%{$search}%")
                ->orWhere('quartier', 'like', "%{$search}%")
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();
            $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('ville', 'like', "%{$search}%")
                ->orWhere('quartier', 'like', "%{$search}%")
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
                ->get();
            $logements=$logements1->merge($logements2);
            return $logements;

    }

    ///3
    public static function searchBudgetMax(Request $request)
    {
        $budget_max = $request->budget_max;
        $logements1=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
            ->where('prix','<=',$budget_max)
            ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
            ->get();

        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','<=',$budget_max)
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
                ->get();

        $logements=$logements1->merge($logements2);
        return $logements;

    }
    //4
    public static function searchBudgetMin(Request $request)
    {
        $budget_min = $request->budget_min;

        $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('prix','>=',$budget_min)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();

        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','>=',$budget_min)
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
                ->get();

        $logements=$logements1->merge($logements2);
        return $logements;

    }
    //5
    public static function search_BudgetMin_And_BudgetMax(Request $request)
    {
        $budget_min = $request->budget_min;
        $budget_max = $request->budget_max;

        $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->whereBetween('prix',[$budget_min,$budget_max])
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();

        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereBetween('prix',[$budget_min,$budget_max])
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
                ->get();
        $logements=$logements1->merge($logements2);
        return $logements;

    }
    //6
    public static function searchType_and_Ville(Request $request)
    {
        $search = $request->search;
        $type=$request->type;
        if($type!=null and $type=="chambre")
        {
            $logements=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
            ->where('ville', 'like', "%{$search}%")
            ->orwhere('quartier', 'like', "%{$search}%")
            ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
            ->get();
            return $logements;
        }else

        {
            $logements=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('ville', 'like', "%{$search}%")
            ->orwhere('quartier', 'like', "%{$search}%")
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
            ->get();
            return $logements;
        }
    }
    //7
    public static function searchQuartier_and_Bmax(Request $request)
    {
        $search = $request->search;
        $budget_max = $request->budget_max;

        $logements2=DB::table('logements')
                    ->join('chambres','logements.id','=','chambres.logement_id')
                    ->join('offres','offres.id','=','logements.offre_id')
                    ->where('offres.status', '=', "Approuvée")
                    ->whereNotIn('chambres.id',function($query){
                        $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                    })
                    ->where('prix','<=',$budget_max)
                    ->where('ville', 'like', "%{$search}%")
                    ->orwhere('quartier', 'like', "%{$search}%")
                    ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                    ->get();

            $logements3=DB::table('logements')
                    ->join('appartements','logements.id','=','appartements.logement_id')
                    ->join('offres','offres.id','=','logements.offre_id')
                    ->where('offres.status', '=', "Approuvée")
                    ->where('prix','<=',$budget_max)
                    ->where('ville', 'like', "%{$search}%")
                    ->orwhere('quartier', 'like', "%{$search}%")
                    ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
                    ->get();

            $logements=$logements2->merge($logements3);
            return $logements;
    }
    //8
    public static function searchQuartier_and_Bmin(Request $request)
    {
        $search = $request->search;
        $budget_min = $request->budget_min;

        $logements2=DB::table('logements')
                    ->join('chambres','logements.id','=','chambres.logement_id')
                    ->join('offres','offres.id','=','logements.offre_id')
                    ->where('offres.status', '=', "Approuvée")
                    ->whereNotIn('chambres.id',function($query){
                        $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                    })
                    ->where('prix','>=',$budget_min)
                    ->where('ville', 'like', "%{$search}%")
                    ->orwhere('quartier', 'like', "%{$search}%")
                    ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                    ->get();

            $logements3=DB::table('logements')
                    ->join('appartements','logements.id','=','appartements.logement_id')
                    ->join('offres','offres.id','=','logements.offre_id')
                    ->where('offres.status', '=', "Approuvée")
                    ->where('prix','>=',$budget_min)
                    ->where('ville', 'like', "%{$search}%")
                    ->orwhere('quartier', 'like', "%{$search}%")
                    ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
                    ->get();

            $logements=$logements2->merge($logements3);
            return $logements;
    }

    //9
     public  static function searchType_and_Bmin(Request $request) {

        $budget_min = $request->budget_min;
        $type=$request->type;
        if($type=="chambre")
        {
            $logements=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
            ->where('prix','>=',$budget_min)
            ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
            ->get();
            return $logements;
        }else
        {
            $logements=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('prix','>=',$budget_min)
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
            ->get();
            return $logements;
        }

     }

     //10
     public  static function searchType_and_Bmax(Request $request) {

        $budget_max = $request->budget_max;
        $type=$request->type;

        if($type=="chambre")
        {
            $logements=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
            ->where('prix','<=',$budget_max)
            ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
            ->get();
            return $logements;
        }else
        {
            $logements=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('prix','<=',$budget_max)
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
            ->get();
            return $logements;
        }

     }

    // 11 recherche la ville ou quartier et type et le budget min
     public static function searchVille_type_Bmin(Request $request)
     {

        $budget_min = $request->budget_min;
        $type = $request->type;
        $search = $request->search;

        if($type=="chambre")
        {
            $logements=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
            ->where('ville', 'like', "%{$search}%")
            ->orwhere('quartier', 'like', "%{$search}%")
            ->where('prix','>=',$budget_min)
            ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
            ->get();
            return $logements;
        }else
        {
            $logements=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('ville', 'like', "%{$search}%")
            ->orwhere('quartier', 'like', "%{$search}%")
            ->where('prix','>=',$budget_min)
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
            ->get();
            return $logements;
        }
    }


    // 12 recherche la ville ou quartier et type et le budget max
    public static function searchVille_type_Bmax(Request $request)
    {
        $search = $request->search;
        $budget_max = $request->budget_max;
        $budget_min = $request->budget_min;
        $type = $request->type;


        if($type=="chambre")
        {
            $logements=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
            ->where('ville', 'like', "%{$search}%")
            ->orwhere('quartier', 'like', "%{$search}%")
            ->where('prix','<=',$budget_max)
            ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
            ->get();
            return $logements;
        }else
        {
            $logements=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('ville', 'like', "%{$search}%")
            ->orwhere('quartier', 'like', "%{$search}%")
            ->where('prix','<=',$budget_max)
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
            ->get();
            return $logements;
        }
    }

    // 13 recherche le type et le budget min et le budget max
    public static function search_type_Bmax_and_Bmin(Request $request)
    {
        $search = $request->search;
        $budget_max = $request->budget_max;
        $budget_min = $request->budget_min;
        $type = $request->type;


        if($type=="chambre")
        {
            $logements=DB::table('logements')
            ->join('chambres','logements.id','=','chambres.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
            ->where('prix','<=',$budget_min)
            ->where('prix','<=',$budget_max)
            ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
            ->get();
            return $logements;
        }else
        {
            $logements=DB::table('logements')
            ->join('appartements','logements.id','=','appartements.logement_id')
            ->join('offres','offres.id','=','logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('prix','<=',$budget_min)
            ->where('prix','<=',$budget_max)
            ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
            ->get();
            return $logements;
        }
    }
// 14 recherche la ville et le type et le budget min et le budget max
public static function searchVille_type_Bmax_and_Bmin(Request $request)
{
    $search = $request->search;
    $budget_max = $request->budget_max;
    $budget_min = $request->budget_min;
    $type = $request->type;
    $disponibilite = $request->disponibilite;

    if($type=="chambre")
    {
        $logements=DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
        })
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('prix','<=',$budget_min)
        ->where('prix','<=',$budget_max)
        ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','chambres.id')
        ->get();
        return  $logements;
    }else
    {
        $logements=DB::table('logements')
        ->join('appartements','logements.id','=','appartements.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('prix','<=',$budget_min)
        ->where('prix','<=',$budget_max)
        ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
        ->get();
        return $logements;
    }
}
    // 15 uniquement avec la disponibilite
    public static function Disponibilite(Request $request)
    {
        $disponibilite=$request->disponibilite;
        $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('chambres.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();
        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('appartements.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','nombre_chambre','disponibilite','l_photos1','appartements.id')
                ->get();

        $logements=$logements1->merge($logements2);
        return $logements;

    }

     // 16 recherche avec la disponibilite et le budget min
     public static function searchDisponibilite_and_Bmin(Request $request)
     {

        $budget_min = $request->budget_min;
        $disponibilite = $request->disponibilite;

         $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('prix','>=',$budget_min)
                ->where('chambres.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();
         $logements2=DB::table('logements')
                 ->join('appartements','logements.id','=','appartements.logement_id')
                 ->join('offres','offres.id','=','logements.offre_id')
                 ->where('offres.status', '=', "Approuvée")
                 ->where('prix','>=',$budget_min)
                 ->where('appartements.disponibilite','>=',$disponibilite)
                 ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
                 ->get();

         $logements=$logements1->merge($logements2);
         return $logements;


     }

     // 17 recherche avec la disponibilite et le budget max
     public static function searchDisponibilite_and_Bmax(Request $request)
     {
         $budget_max = $request->budget_max;
         $disponibilite = $request->disponibilite;

         $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','<=',$budget_max)
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('chambres.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();

         $logements2=DB::table('logements')
                 ->join('appartements','logements.id','=','appartements.logement_id')
                 ->join('offres','offres.id','=','logements.offre_id')
                 ->where('offres.status', '=', "Approuvée")
                 ->where('prix','<=',$budget_max)
                 ->where('appartements.disponibilite','>=',$disponibilite)
                 ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
                 ->get();

         $logements=$logements1->merge($logements2);

         return $logements;
     }

     // 18 recherche avec la disponibilite et le budget max et le budget min
     public static function searchDisponibilite_Bmin_and_Bmax(Request $request)
    {

        $budget_max = $request->budget_max;
        $budget_min = $request->budget_min;
        $disponibilite = $request->disponibilite;

        $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('prix','<=',$budget_min)
                ->where('prix','<=',$budget_max)
                ->where('chambres.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();

        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('prix','<=',$budget_min)
                ->where('prix','<=',$budget_max)
                ->where('appartements.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
                ->get();

        $logements=$logements1->merge($logements2);
        return $logements;

    }


    // 19 recherche avec la ville ou le quartier et la disponibilite
    public static function searchDisponibilite_ville(Request $request)
    {
            $search = $request->search;
            $disponibilite = $request->disponibilite;

        $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('logements.ville', 'like', "%{$search}%")
                ->orwhere('logements.quartier', 'like', "%{$search}%")
                ->where('chambres.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();
        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('ville', 'like', "%{$search}%")
                ->orwhere('quartier', 'like', "%{$search}%")
                ->where('appartements.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
                ->get();

        $logements=$logements1->merge($logements2);
        return  $logements;
    }


    // 20 recherche avec la ville ou le quartier et la disponibilite et le budget min
    public static function searchDisponibilite_ville_and_Bmin(Request $request)
    {
            $search = $request->search;
            $budget_max = $request->budget_max;
            $budget_min = $request->budget_min;
            $type = $request->type;
            $disponibilite = $request->disponibilite;

        $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('logements.ville', 'like', "%{$search}%")
                ->orwhere('logements.quartier', 'like', "%{$search}%")
                ->where('chambres.prix','>=',$budget_min)
                ->where('chambres.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();

        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('ville', 'like', "%{$search}%")
                ->orwhere('quartier', 'like', "%{$search}%")
                ->where('appartements.prix','>=',$budget_min)
                ->where('appartements.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
                ->get();

        $logements=$logements1->merge($logements2);
        return $logements;

    }


    // 21 recherche avec la ville ou le quartier et la disponibilite et le budget max
    public static function searchDisponibilite_ville_and_Bmax(Request $request)
    {
            $search = $request->search;
            $budget_max = $request->budget_max;
            $budget_min = $request->budget_min;
            $type = $request->type;
            $disponibilite = $request->disponibilite;

        $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('logements.ville', 'like', "%{$search}%")
                ->orwhere('logements.quartier', 'like', "%{$search}%")
                ->where('chambres.prix','<=',$budget_max)
                ->where('chambres.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();

        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('ville', 'like', "%{$search}%")
                ->orwhere('quartier', 'like', "%{$search}%")
                ->where('appartements.prix','<=',$budget_max)
                ->where('appartements.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
                ->get();

        $logements=$logements1->merge($logements2);
        return $logements;
    }


    // 22 recherche avec la ville ou le quartier et la disponibilite et le budget max et le budget min
    public static function searchDisponibilite_ville_and_Bmax_Bmin(Request $request)
    {
            $search = $request->search;
            $budget_max = $request->budget_max;
            $budget_min = $request->budget_min;
            $disponibilite = $request->disponibilite;

        $logements1=DB::table('logements')
                ->join('chambres','logements.id','=','chambres.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->whereNotIn('chambres.id',function($query){
                    $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
                })
                ->where('logements.ville', 'like', "%{$search}%")
                ->orwhere('logements.quartier', 'like', "%{$search}%")
                ->where('chambres.prix','>=',$budget_min)
                ->where('chambres.prix','<=',$budget_max)
                ->where('chambres.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
                ->get();
        $logements2=DB::table('logements')
                ->join('appartements','logements.id','=','appartements.logement_id')
                ->join('offres','offres.id','=','logements.offre_id')
                ->where('offres.status', '=', "Approuvée")
                ->where('ville', 'like', "%{$search}%")
                ->orwhere('quartier', 'like', "%{$search}%")
                ->where('appartements.prix','>=',$budget_min)
                ->where('appartements.prix','<=',$budget_max)
                ->where('appartements.disponibilite','>=',$disponibilite)
                ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
                ->get();

        $logements=$logements1->merge($logements2);
        return $logements;

    }

    //23 Avec la ville ou le quatier et le budget min et le budget max
    public static function searchVille_and_Bmax_Bmin(Request $request)
   {
        $search = $request->search;
        $budget_max = $request->budget_max;
        $budget_min = $request->budget_min;

       $logements2=DB::table('logements')
               ->join('chambres','logements.id','=','chambres.logement_id')
               ->join('offres','offres.id','=','logements.offre_id')
               ->where('offres.status', '=', "Approuvée")
               ->whereNotIn('chambres.id',function($query){
                $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
               ->where('prix','>=',$budget_min)
               ->where('prix','<=',$budget_max)
               ->where('ville', 'like', "%{$search}%")
               ->orwhere('quartier', 'like', "%{$search}%")
               ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
               ->get();

       $logements3=DB::table('logements')
               ->join('appartements','logements.id','=','appartements.logement_id')
               ->join('offres','offres.id','=','logements.offre_id')
               ->where('offres.status', '=', "Approuvée")
               ->where('prix','>=',$budget_min)
               ->where('prix','<=',$budget_max)
               ->where('ville', 'like', "%{$search}%")
               ->orwhere('quartier', 'like', "%{$search}%")
               ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
               ->get();

       $logements=$logements2->merge($logements3);
       return $logements;

   }

   // 24 recherche le type et le la disponibilite
   public static function searchdisponibilite_type(Request $request)
   {

        $type = $request->type;
        $disponibilite = $request->disponibilite;

       if($type=="chambre")
       {
           $logements=DB::table('logements')
           ->join('chambres','logements.id','=','chambres.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
             })
           ->where('chambres.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
           ->get();
           return  $logements;
       }else
       {
           $logements=DB::table('logements')
           ->join('appartements','logements.id','=','appartements.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->where('appartements.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
           ->get();
           return  $logements;
       }
   }

   // 25 recherche le type et le la disponibilite et le budget min
   public static function searchdisponibilite_type_and_Bmin(Request $request)
   {

        $budget_min = $request->budget_min;
        $type = $request->type;
        $disponibilite = $request->disponibilite;

       if($type=="chambre")
       {
           $logements=DB::table('logements')
           ->join('chambres','logements.id','=','chambres.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
           ->where('chambres.prix','>=',$budget_min)
           ->where('chambres.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
           ->get();
           return $logements;
       }else
       {
           $logements=DB::table('logements')
           ->join('appartements','logements.id','=','appartements.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->where('appartements.disponibilite','>=',$disponibilite)
           ->where('appartements.prix','>=',$budget_min)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
           ->get();
           return $logements;
       }
   }


   // 26 recherche le type et le la disponibilite et le budget max
   public static function searchdisponibilite_type_and_Bmax(Request $request)
   {
        $search = $request->search;
        $budget_max = $request->budget_max;
        $type = $request->type;
        $disponibilite = $request->disponibilite;

       if($type=="chambre")
       {
           $logements=DB::table('logements')
           ->join('chambres','logements.id','=','chambres.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
           ->where('chambres.prix','<=',$budget_max)
           ->where('chambres.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
           ->get();
           return $logements;
       }else
       {
           $logements=DB::table('logements')
           ->join('appartements','logements.id','=','appartements.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->where('appartements.disponibilite','>=',$disponibilite)
           ->where('appartements.prix','<=',$budget_max)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
           ->get();
           return $logements;
       }
   }


   // 27 recherche le type et le la disponibilite et le budget max et le budget min
   public static function searchdisponibilite_type_and_Bmax_Bmin(Request $request)
   {
        $search = $request->search;
        $budget_max = $request->budget_max;
        $budget_min = $request->budget_min;
        $type = $request->type;
        $disponibilite = $request->disponibilite;
       if($type=="chambre")
       {
           $logements=DB::table('logements')
           ->join('chambres','logements.id','=','chambres.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
           ->where('chambres.prix','>=',$budget_min)
           ->where('chambres.prix','<=',$budget_max)
           ->where('chambres.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
           ->get();
           return  $logements;
       }else
       {
           $logements=DB::table('logements')
           ->join('appartements','logements.id','=','appartements.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->where('apartements.prix','>=',$budget_min)
           ->where('appartements.prix','<=',$budget_max)
           ->where('appartements.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
           ->get();
           return  $logements;
       }
   }

   // 28 recherche la ville ou le quartier  et le type et la disponibilite
   public static function searchdisponibilite_type_ville(Request $request)
   {
        $search = $request->search;
        $type = $request->type;
        $disponibilite = $request->disponibilite;

       if($type=="chambre")
       {
           $logements=DB::table('logements')
           ->join('chambres','logements.id','=','chambres.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
           ->where('ville', 'like', "%{$search}%")
           ->orwhere('quartier', 'like', "%{$search}%")
           ->where('chambres.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
           ->get();
           return  $logements;
       }else
       {
           $logements=DB::table('logements')
           ->join('appartements','logements.id','=','appartements.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->where('ville', 'like', "%{$search}%")
           ->orwhere('quartier', 'like', "%{$search}%")
           ->where('appartements.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
           ->get();
           return $logements;
       }
   }

   // 29 recherche la ville ou le quartier  et le type et la disponibilite et le budget min
   public static function searchdisponibilite_type_Bmin(Request $request)
   {
        $search = $request->search;
        $budget_min = $request->budget_min;
        $type = $request->type;
        $disponibilite = $request->disponibilite;

       if($type=="chambre")
       {
           $logements=DB::table('logements')
           ->join('chambres','logements.id','=','chambres.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
           ->where('ville', 'like', "%{$search}%")
           ->orwhere('quartier', 'like', "%{$search}%")
           ->where('chambres.prix','>=',$budget_min)
           ->where('chambres.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
           ->get();
           return  $logements;
       }else
       {
           $logements=DB::table('logements')
           ->join('appartements','logements.id','=','appartements.logement_id')
           ->join('offres','offres.id','=','logements.offre_id')
           ->where('offres.status', '=', "Approuvée")
           ->where('ville', 'like', "%{$search}%")
           ->orwhere('quartier', 'like', "%{$search}%")
           ->where('apartements.prix','>=',$budget_min)
           ->where('appartements.disponibilite','>=',$disponibilite)
           ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
           ->get();
           return  $logements;
       }
   }


// 30 recherche la ville ou le quartier  et le type et la disponibilite et le budget max
public static function searchdisponibilite_type_ville_Bmin(Request $request)
{
    $search = $request->search;
    $budget_min = $request->budget_min;
    $type = $request->type;
    $disponibilite = $request->disponibilite;

    if($type=="chambre")
    {
        $logements=DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
        })
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('chambres.prix','<=',$budget_max)
        ->where('chambres.disponibilite','>=',$disponibilite)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
        ->get();
        return $logements;
    }else
    {
        $logements=DB::table('logements')
        ->join('appartements','logements.id','=','appartements.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('apartements.prix','<=',$budget_max)
        ->where('appartements.disponibilite','>=',$disponibilite)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
        ->get();
        return $logements;
    }
}


// 31 recherche la ville ou le quartier  et le type et la disponibilite et le budget max et budget min
public static function searchdisponibilite_type_ville_Bmin_Bmax(Request $request)
{
    $search = $request->search;
    $budget_max = $request->budget_max;
    $budget_min = $request->budget_min;
    $type = $request->type;
    $disponibilite = $request->disponibilite;

    if($type=="chambre")
    {
        $logements=DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
            })
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('chambres.prix','>=',$budget_min)
        ->where('chambres.prix','<=',$budget_max)
        ->where('chambres.disponibilite','>=',$disponibilite)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
        ->get();
        return $logements;
    }else
    {
        $logements=DB::table('logements')
        ->join('appartements','logements.id','=','appartements.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('appartements.prix','>=',$budget_min)
        ->where('appartements.prix','<=',$budget_max)
        ->where('appartements.disponibilite','>=',$disponibilite)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
        ->get();
        return $logements;
    }
}
// 31 recherche la ville ou le quartier  et le type et la disponibilite et le budget max et budget min
public static function searchdisponibilite_type_ville_Bmax(Request $request)
{
    $search = $request->search;
    $budget_max = $request->budget_max;
    $budget_min = $request->budget_min;
    $type = $request->type;
    $disponibilite = $request->disponibilite;

    if($type=="chambre")
    {
        $logements=DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
        })
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('chambres.prix','<=',$budget_max)
        ->where('chambres.disponibilite','>=',$disponibilite)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
        ->get();
        return $logements;
    }else
    {
        $logements=DB::table('logements')
        ->join('appartements','logements.id','=','appartements.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('appartements.prix','<=',$budget_max)
        ->where('appartements.disponibilite','>=',$disponibilite)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
        ->get();
        return $logements;
    }
}

// 30 recherche la ville ou le quartier  et le type et la disponibilite et le budget max
public static function searchVille_type_Bmin_Bmax(Request $request)
{
    $search = $request->search;
    $budget_min = $request->budget_min;
    $type = $request->type;
    $budget_max = $request->budget_max;
    $disponibilite = $request->disponibilite;

    if($type=="chambre")
    {
        $logements=DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->whereNotIn('chambres.id',function($query){
            $query->select('appartement_chambres.chambre_id')->from('appartement_chambres');
        })
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('chambres.prix','>=',$budget_min)
        ->where('chambres.prix','<=',$budget_max)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','chambres.id')
        ->get();
        return $logements;
    }else
    {
        $logements=DB::table('logements')
        ->join('appartements','logements.id','=','appartements.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->where('ville', 'like', "%{$search}%")
        ->orwhere('quartier', 'like', "%{$search}%")
        ->where('appartements.prix','>=',$budget_min)
        ->where('appartements.prix','<=',$budget_max)
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','l_photos1','appartements.id')
        ->get();
        return $logements;
    }
}


}
?>
