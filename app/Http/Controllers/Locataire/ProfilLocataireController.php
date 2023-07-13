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
        //dd($request->all());
        $locataire = Locataire::findOrFail($request->id);

    $rules = [
        'prenom' => ['required', 'string', 'max:255'],
        'nom' => ['required', 'string', 'max:255'],
        'telephone' => ['required', 'string', 'max:255'],
        'presentation' => ['required','string','max:500'],
        'gender' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255',],
    ];

    if ($request->has("photo")) {
        $rules["photo"] = ['bail','required','image','max:1024'];
    }

    $this->validate($request, $rules);

    // 2. On upload l'image dans "/storage/app/public/posts"
    $chemin_image='';
    if ($request->has("photo")) {

        //On supprime l'ancienne image

        $chemin_image = $request->file('photo')->store("locataire",'public');
    }

    // 3. On met à jour les informations du locataire
    $locataire->update([

        "profil" => $chemin_image,
        'nom' => $request->nom,
        'prenom' =>$request->prenom,
        'email' => $request->email,
        'sexe' => $request->gender,
        'telephone' => $request->telephone,
        'presentation' => $request->presentation,
    ]);
    $locataire->save();
    return redirect('/reservation-locataire')->with('success', 'Informations mises à jour avec succès');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $locataire = Locataire::findOrFail($id);
        $locataire->delete();
    
       return redirect('/')->with('success', 'compte supprimer avec succèss');
    }
}
