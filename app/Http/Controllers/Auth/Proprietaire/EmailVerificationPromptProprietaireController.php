<?php

namespace App\Http\Controllers\Auth\Proprietaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerificationPromptProprietaireController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.verify-email');
    }
}
