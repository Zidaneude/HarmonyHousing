<?php

namespace App\Http\Controllers\Auth\Proprietaire;


use toastr;
use Rules\Password;
use App\Models\User;
use App\Models\Locataire;
use Illuminate\View\View;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredProprietaireController extends Controller
{

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.inscription-proprietaire');
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
            'telephone' => ['required', 'string', 'min:9', 'max:9', 'unique:' . Proprietaire::class],
            'gender' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:' . Proprietaire::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $proprietaire = Proprietaire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'sexe' => $request->gender,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),

        ]);
       // toastr()->success('creation du compte  propriétaire reussie');

        // event(new Registered($proprietaire));

        Auth::guard('proprietaire')->login($proprietaire);

        return redirect(RouteServiceProvider::DASHBORD);
    }
}
