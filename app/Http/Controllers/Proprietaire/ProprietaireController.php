<?php

namespace App\Http\Controllers\Proprietaire;

use App\Models\Offre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProprietaireController extends Controller
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
        //id proprietaire connecté
        $id=Auth::guard('proprietaire')->user()->id;

        $offre=Offre::where('proprietaire_id','=',$id);
        return view('dashboard.dashboard-proprietaire',['offre'=>$offre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function reservation()
    {
        return view('location.reservations-prop');
    }

    public function disponibilite()
    {
        return view('soumission_offre.disponibilite-logement');
    }
}
