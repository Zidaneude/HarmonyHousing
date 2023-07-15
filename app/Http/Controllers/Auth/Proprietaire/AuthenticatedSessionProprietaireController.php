<?php

namespace App\Http\Controllers\Auth\Proprietaire;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginProprietaireRequest;

class AuthenticatedSessionProprietaireController extends Controller
{
      /**
     * retournne la vue d'inscription du proprietaire.
     */

    public function create(): View
    {
        return view('auth.connexion-proprietaire');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginProprietaireRequest $request): RedirectResponse
    {


        $request->authenticate();
        $request->session()->regenerate();
        $pre=Auth::guard('proprietaire')->user()->nom;
        // toastr()->success('Heureux de vous revoir '.$pre);
        return redirect()->intended(RouteServiceProvider::DASHBORD);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $pre=Auth::guard('proprietaire')->user()->nom;
        Auth::guard('proprietaire')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

//        toastr()->success(' Au revoir '.$pre.' à la prochaine !');
        return redirect('/');
    }
}
