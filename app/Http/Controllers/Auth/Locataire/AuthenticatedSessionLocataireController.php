<?php

namespace App\Http\Controllers\Auth\Locataire;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginLocataireRequest;







class AuthenticatedSessionLocataireController extends Controller
{
    
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.connexion-locataire');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginLocataireRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        $pre=Auth::guard('locataire')->user()->nom;
        toastr()->success('Heureux de vous revoir '.$pre);
        //return redirect()->intended(RouteServiceProvider::DASHBORD_LOCATAIRE);
        $locataire=Auth::guard('locataire')->user();
        return view('profils.profil-locataire',['locataire'=>$locataire]) ;
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $pre=Auth::guard('locataire')->user()->nom;
        Auth::guard('locataire')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        toastr()->success(' Au revoir '.$pre.' à la prochaine !');
        return redirect('/');
    } 
}   
