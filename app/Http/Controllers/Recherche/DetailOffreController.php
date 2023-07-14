<?php

namespace App\Http\Controllers\Recherche;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailOffreController extends Controller
{
    public function DetailChambre( string $id){
        //dd($id);
        return view('recherche.details-offre');
    }


    public function DetailAppartement(string $id){
        return view('recherche.details-offre');
    }
}
