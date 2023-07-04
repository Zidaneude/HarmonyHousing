<?php

namespace App\Http\Controllers\ApiRest\Proprietaire;

use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\Auth\LoginProprietaireRequest;

class ApiProprietaireControlleur extends Controller
{

    public function proprietaire($id)
    {
        $proprietaire=Proprietaire::findOrFail($id);

        return response()->json([
        "id"=>$proprietaire->id,
        "nom"=>$proprietaire->nom,
        "prenom"=>$proprietaire->prenom,
        "email"=>$proprietaire->email,
        "telephone"=>$proprietaire->telephone,
        "presentation"=>$proprietaire->presentation,
        "sexe"=>$proprietaire->sexe,
        "profil"=>$proprietaire->profil
    ]);

    }

    public function index()
    {
       $proprietaire=Proprietaire::all();
       return response()->json($proprietaire);
    }

    public function inscription(Request $request)
    {

        $pro_email=Proprietaire::where('email','=',$request->email)->get();
        $pro_phone=Proprietaire::where('telephone','=',$request->telephone)->get();

       if($pro_email->count()>0)
       {
           return response()->json(["message"=>"email existe déja"]);
       }

        if( $pro_phone->count()>0)
        {
            return response()->json(["message"=>"phone existe déja"]);
        }

        $proprietaire = proprietaire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' =>$request->telephone,
            'sexe' =>$request->sexe,
            'password' => bcrypt($request->password)
        ]);
        event(new Registered($proprietaire));

        Auth::guard('proprietaire')->login($proprietaire);
       return response()->json(["message"=>"creation du compte propreitaire reussie"]);
    }


    public function deleleproprietaire($id)
    {
        $pro=Proprietaire::find($id);
        if($pro!=null)
        {
            $pro->delete();
            return response()->json(["message"=>"Votre compte propriétaire a éte supprimer avec succes"]);

        }
        else{
            return response()->json(["status"=>"Erreur de suppresion de compte"]);
        }
    }

    public function updateNom(Request $request)
    {
        $proprietaire=Proprietaire::find($request->id);
        if($proprietaire!=null)
        {
            $proprietaire->nom=$request->nom;
            $proprietaire->save();
            return response()->json(["message"=>"mise à jour du nom reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }
    public function updatePrenom(Request $request)
    {
        $proprietaire=Proprietaire::find($request->id);
        if($proprietaire!=null)
        {
            $proprietaire->prenom=$request->prenom;
            $proprietaire->save();
            return response()->json(["message"=>"mise à jour du prenom reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }
    public function updateEmail(Request $request)
    {


        $proprietaire=Proprietaire::find($request->id);
        if($proprietaire!=null)
        {
            $proprietaire->email=$request->email;
            $proprietaire->save();
            return response()->json(["message"=>"mise à jour de adresse email reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }

    public function updatePhone(Request $request)
    {
        $proprietaire=Proprietaire::find($request->id);
        if($proprietaire!=null)
        {
            $proprietaire->telephone=$request->telephone;
            $proprietaire->save();
            return response()->json(["message"=>"mise à jour du telephone reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }
    public function updateSexe(Request $request)
    {
        $proprietaire=Proprietaire::find($request->id);
        if($proprietaire!=null)
        {
            $proprietaire->sexe=$request->sexe;
            $proprietaire->save();
            return response()->json(["message"=>"mise à jour de la civilité reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }

    public function updaPresentation(Request $request)
    {
        $proprietaire=Proprietaire::find($request->id);
        if($proprietaire!=null)
        {
            $proprietaire->presentation=$request->presentation;
            $proprietaire->save();
            return response()->json(["message"=>"mise à jour de la  presentation reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }

    public function uploadImage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
         ]);
        if ($validator->fails()) {

            return response()->json(["status"=>"echec"]);
        }
        $uploadFolder = 'proprietaire';
        $image = $request->file('image');
        $image_uploaded_path = $image->storeAs($uploadFolder, 'public');
        $proprietaire=Proprietaire::find($request->id);
        if($proprietaire!=null)
        {
            $proprietaire->profil= $image_uploaded_path ;
            $proprietaire->save();
            return response()->json(["status"=>"reussie"]);
        }

    }
    public function login(LoginProprietaireRequest $request)
    {

       $request->authenticate();
       session()->regenerate();
       $pre=Auth::guard('proprietaire')->user()->nom;
       if($pre!=null)
       {
            return response()->json(["message"=>"connexion reussie"]);
       }else
       {
            return response()->json(["message"=>"connexion échoué"]);
       }

    }
    public function logout(Request $request)
    {
        $pre=Auth::guard('proprietaire')->user()->nom;
        Auth::guard('proprietaire')->logout();
        session()->invalidate();
        session()->regenerateToken();
        if($pre!=null)
        {
             return response()->json(["message"=>"connexion reussie"]);
        }else
        {
             return response()->json(["message"=>"connexion échoué"]);
        }

    }
}
