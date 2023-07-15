<?php

namespace App\Http\Controllers\Recherche;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailOffreController extends Controller
{
    public function DetailChambre( string $id){
        //dd($id);

        $logements=DB::table('logements')
        ->join('chambres','logements.id','=','chambres.logement_id')
        ->join('offres','offres.id','=','logements.offre_id')
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','chambres.id')
        ->get();
        return view('recherche.details-offre');
    }


    public function DetailAppartement(string $id){

        $logements=DB::table('logements')
        ->join('appartements','logements.id','=','appartements.logement_id')
        ->join('offres','offres.id','=','logements.offre_id') 
        ->select('prix','quartier','ville','logements.type','meuble','disponibilite','logements.photos1','appartements.id')
        ->get();
        return view('recherche.details-offre');
    }
}
