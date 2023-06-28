<?php

namespace App\Http\Controllers\Auth\Proprietaire;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthenticatedSessionProprietaireController extends Controller
{
      /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('connexion-proprietaire');
    }
    
}
