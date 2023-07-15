<?php

namespace App\Http\Controllers\Recherche;

use App\Models\Chambre;
use App\Models\Equiper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DetailOffreController extends Controller
{
    public function DetailChambre( string $id){

        $logements=DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->where('offres.status', '=', "Approuvée")
        ->where('chambres.id', '=',$id)
        ->whereNotIn('chambres.id',function($query){
            $query->select('inclures.chambre_id')->from('inclures');
        })
        ->select('*')
        ->get();
        $chambres=Chambre::find($id);
      //  dd($chambres->equipements);

        return view('recherche.details-offre', ['logements' => $logements,'chambres'=>$chambres]);
    }


    public function DetailAppartement(string $id){

        $logements=DB::table('logements')
        ->join('appartements','logements.id','=','appartements.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','appartements.id')
        ->get();
        return view('recherche.details-offre', ['logements' => $logements]);
    }
}
