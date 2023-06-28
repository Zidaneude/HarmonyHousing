<?php

namespace App\Http\Controllers;

use App\Models\Locataire;
use App\Http\Requests\StoreLocataireRequest;
use App\Http\Requests\UpdateLocataireRequest;


class LocataireController extends Controller
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
        return view('inscription-locataire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocataireRequest $request)
    {
       $locataire = Locataire::create([

            'email' => $request->input('email'),
            'sexe' => $request->input('gender'),
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'telephone' => $request->input('NumeroTel'),
            'MotDePasse' => $request->input('password'),
            'text' => $request->only('receiveOffers', 'dataProcessing', 'termsOfUse')
            
        ]);  
        return redirect('/')->with('success', 'Données enregistrées avec succès !');
    }   

    /**
     * Display the specified resource.
     */
    public function show(Locataire $locataire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Locataire $locataire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocataireRequest $request, Locataire $locataire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Locataire $locataire)
    {
        //
    }
}
