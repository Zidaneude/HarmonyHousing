<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
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
        return view('dashboard.dashboard-admin') ;
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

    public function gestionOfrre()
    {
        $offre=Offre::all();
        return view('verification.verification-offre-admin',['offre'=>$offre]);
    }

    public function RejeterOfrre(string $id)
    {
        $offre=Offre::find($id);
        $offre->status="Réjétée";
        $offre->save();
        return redirect()->route('admin.dasboard.gestion_offre');
    }

    public function ApprouverOfrre(string $id)
    {
        $offre=Offre::find($id);
        $offre->status="Approuvée";
        $offre->save();
        return redirect()->route('admin.dasboard.gestion_offre');
    }

    public function DetailOffre(string $id)
    {
    }

    public function AvisManager()
    {
        return view('verification.verification-avis');
    }

    public function HistoriqueResevation()
    {
        return view('historique.historique-reservations');
    }

}
