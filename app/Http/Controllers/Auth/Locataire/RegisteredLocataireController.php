<?php

namespace App\Http\Controllers\Auth\Locataire;

use App\Models\Locataire;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredLocataireController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.inscription-locataire');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'prenom' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Locataire::class],
            'password' => ['required'],
        ]);

        $locataire = Locataire::create([
            'nom' => $request->nom,
            'prenom' =>$request->prenom,
            'email' => $request->email,
            'sexe' => $request->gender,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),

        ]);

        event(new Registered($locataire));
 
        Auth::login($locataire);

        return redirect(RouteServiceProvider::CONNEXION_LOCATAIRE);
    }
}
