<?php

namespace App\Http\Controllers\ApiRest\Locataire;

use App\Models\Locataire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiLocataireControlleur extends Controller
{
    public function Locataire($id)
    {
        $locataire=Locataire::findOrFail($id);
        return response()->json([
            "id"=>$locataire->id,
            "nom"=>$locataire->nom,
            "prenom"=>$locataire->prenom,
            "email"=>$locataire->email,
            "telephone"=>$locataire->telephone,
            "presentation"=>$locataire->presentation,
            "sexe"=>$locataire->sexe,
            "profil"=>$locataire->profil
        ]);
    }

    public function index()
    {
       $locataire=Locataire::all();
       return response()->json($locataire);
    }

    public function inscription(Request $request)
    {

        $pro_email=Locataire::where('email','=',$request->email)->get();
        $pro_phone=Locataire::where('telephone','=',$request->telephone)->get();

       if($pro_email->count()>0)
       {
           return response()->json(["message"=>"email existe déja"]);
       }

        if( $pro_phone->count()>0)
        {
            return response()->json(["message"=>"phone existe déja"]);
        }

        $user = Locataire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' =>$request->telephone,
            'sexe' =>$request->sexe,
            'password' => bcrypt($request->password)
        ]);

       return response()->json(["message"=>"creation du compte locataire reussie"]);
    }

    public function deleleLocataire($id)
    {
        $locataire=Locataire::find($id);
        if( $locataire)
        {
            $locataire->delete();
            return response()->json(["message"=>"Votre compte locataire a éte supprimer avec succes"]);

        }
        else{
            return response()->json(["status"=>"Erreur de suppresion de compte"]);
        }
    }

    public function updateNom(Request $request)
    {
        $locataire=Locataire::find($request->id);
        if($locataire)
        {
            $locataire->nom=$request->nom;
            $locataire->save();
            return response()->json(["message"=>"mise a jour du nom reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }
    public function updatePrenom(Request $request)
    {
        $locataire=Locataire::find($request->id);
        if($locataire)
        {
            $locataire->prenom=$request->prenom;
            $locataire->save();
            return response()->json(["message"=>"mise a jour du prenom reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }
    public function updateEmail(Request $request)
    {


        $locataire=Locataire::find($request->id);
        if($locataire)
        {
            $locataire->email=$request->email;
            $locataire->save();
            return response()->json(["message"=>"mise a jour de email reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }

    public function updatePhone(Request $request)
    {
        $locataire=Locataire::find($request->id);
        if($locataire)
        {
            $locataire->telephone=$request->telephone;
            $locataire->save();
            return response()->json(["message"=>"mise a jour du telephone reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }
    public function updateSexe(Request $request)
    {
        $locataire=Locataire::find($request->id);
        if($locataire)
        {
            $locataire->sexe=$request->sexe;
            $locataire->save();
            return response()->json(["message"=>"mise a jour du sexe reussie"]);

        }
        else{
            return response()->json(["message"=>"Echec de mise à jour"]);
        }
    }

    public function uploadImage(Request $request)
    {
        $l=Locataire::find($request->id);
        $validator = Validator::make($request->all(), [
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
         ]);
         //dd($validator->fails());
        if ($validator->fails()) {

            return response()->json(["message"=>"Echec de mise à jour"]);
        }
        $uploadFolder = 'locataire';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $locataire=Locataire::find($request->id);
        if($locataire!=null)
        {
            $locataire->profil= $image_uploaded_path ;
            $locataire->save();
            return response()->json(["status"=>"reussie"]);
        }

    }
    public function login(Request $request)
    {

       $log=Locataire::where('email','=',$request->email)->first();
       if($log )
       {            if(Hash::check($request->password, $log->password))
                    {
                        Auth::login($log);
                        if(Auth::check())
                        {
                            return response()->json(["message"=>"connexion reussie",
                            "id"=>$log->id]);
                        }
                        //return response()->json(["status"=>"echvvdec",
                                          //      "id"=>$log->id]);

                    }
                    else{
                        return response()->json(["message"=>"mot de passe invalide",
                        "id"=>-1]);
                    }

       }
       else
       {
        return response()->json(["message"=>"email invalide",
        "id"=>-2]);
       }


    }

     public function resetpassword(Request $request)
    {
        $request->validate([
           /// 'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                //event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);


    }
}
