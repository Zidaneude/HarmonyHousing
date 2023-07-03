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
    public function store(LoginLocataireRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('locataire')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    } 
}   
