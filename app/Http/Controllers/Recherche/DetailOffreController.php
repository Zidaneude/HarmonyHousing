<?php

namespace App\Http\Controllers\Recherche;

use App\Models\Chambre;
use App\Models\Equiper;
use App\Models\Appartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DetailOffreController extends Controller
{
    public function DetailChambre(string $id)
    {
        $logements = DB::table('logements')
            ->join('chambres', 'logements.id', '=', 'chambres.logement_id')
            ->join('offres', 'offres.id', '=', 'logements.offre_id')
            ->where('offres.status', '=', "Approuvée")
            ->where('chambres.id', '=', $id)
            ->whereNotIn('chambres.id', function ($query) {
                $query->select('inclures.chambre_id')->from('inclures');
            })
            ->select('*')
            ->get();
            //dd($logements);
        $chambres = Chambre::find($id);
        return view('recherche.details-offre', ['logements' => $logements, 'chambres' => $chambres]);
    }


    public function DetailAppartement(string $id)
    {

        $logements = DB::table('logements')
            ->join('appartements', 'logements.id', '=', 'appartements.logement_id')
            ->join('offres', 'offres.id', '=', 'logements.offre_id')
            ->where('appartements.id', '=', $id)
            ->select('*')
            ->get();


           $appartement=Appartement::find($id);
           return view('recherche.details_appartement', ['logements' => $logements, 'appartement' => $appartement]);
    }
}
