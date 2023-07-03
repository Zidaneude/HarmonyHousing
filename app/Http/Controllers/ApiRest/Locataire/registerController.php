<?php

namespace App\Http\Controllers\ApiRest\Locataire;

use Rules\Password;
use App\Models\Locataire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class registerController extends Controller
{
    public function getLocataire()
    {
       // $locataire=Locataire::findOrFail($email);
       $locataire=Locataire::all();
        return response()->json($locataire);
    }

    public function inscription(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'telephone' => ['required', 'min:9', 'max:9'],
            'sexe' => ['required','string', 'max:1'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = Locataire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' =>$request->telephone,
            'sexe' =>$request->sexe,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
    }
}
