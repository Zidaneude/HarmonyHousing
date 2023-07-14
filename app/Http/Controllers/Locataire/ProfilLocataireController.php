<?php

namespace App\Http\Controllers\Locataire;

use App\Models\Locataire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilLocataireController extends Controller
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
        $locataire=Auth::guard('locataire')->user();
        return view('profils.profil-locataire',['locataire'=>$locataire]) ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
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
    public function edit( $id)
    {

    // Récupérer le locataire correspondant à l'id
   // $locataire = Locataire::findOrFail($id);
    //if ($locataire) {
       // return view('profil.locataire.edit', ['id' => $locataire->id]);
   // } else {
        //abort(404);
   }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        ($request->all());
        $locataire = Locataire::findOrFail($request->id);

    $rules = [
        'prenom' => ['required', 'string', 'max:255'],
        'nom' => ['required', 'string', 'max:255'],
        'telephone' => ['required', 'string', 'max:255'],
        'presentation' => ['nullable','string','max:500'],
        'gender' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255',],
    ];

    if ($request->has("photo")) {
        $rules["photo"] = ['bail','required','image','max:1024'];
    }
  
   

    $this->validate($request, $rules);

    // On upload l'image dans "/storage/app/public/posts"
    $chemin_image='';
    if ($request->has("photo")) {

        //On supprime l'ancienne image

        $chemin_image = $request->file('photo')->store("locataire",'public');
    }

    //  On met à jour les informations du locataire
    // Pas besoin de faire un if ici, on utilise fill au lieu de update
    $locataire->fill([
        'nom' => $request->nom,
        'prenom' =>$request->prenom,
        'email' => $request->email,
        'sexe' => $request->gender,
        'telephone' => $request->telephone,
        'presentation' => $request->presentation,
    ])->save();
    
    return redirect('/profil-locataire')->with('success', 'Informations mises à jour avec succès');
    //return view('profils.profil-locataire',['locataire'=>$locataire]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        dd(true);
        $locataire = Locataire::findOrFail($id);
        $locataire->delete();
    
       return redirect('/')->with('success', 'compte supprimer avec succèss');
    }
}
