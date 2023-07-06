<?php

namespace App\Http\Controllers\Proprietaire;

use App\Models\Offre;
use App\Models\Logement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SoumissionOffreControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('soumission_offre.soumission-offre-proprietaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $id=Auth::guard('proprietaire')->user()->id;

        $chambres_idem=$request->chambres_idem;
        $type_logement=$request->type_logement;
        $meuble=$request->meuble1;
        $equipements1=$request->equipements1;

        $nb=$request->chambre;
       // dd( $request);

        $offre=Offre::create([
            'titre'=>$request->titre,
            'description'=>$request->description_annonce,
            'status'=>"en attente",
            'proprietaire_id'=>$id,
        ]);
        $i=0;
        if($chambres_idem=="oui")
        {
            for($i=0;$i<$nb;$i++)
            {
                $logement=Logement::create([
                    'adresse'=>$request->adresse,
                    'quartier'=>$request->quartier,
                    'region'=>$request->region,
                    'ville'=>$request->ville,
                    'code_postal'=>$request->code_postal,
                    'frequence_paie'=>$request->frequence_paie,
                    'prix'=>$request->loyer1,
                    'meuble'=>$request->meuble,
                ]);
            }
        }


        //chambres ou appartement ou studio
       // $type_logement=$request->type_logement;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
