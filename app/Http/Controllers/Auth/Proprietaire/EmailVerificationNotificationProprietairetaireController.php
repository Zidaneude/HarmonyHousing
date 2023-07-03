<?php

namespace App\Http\Controllers\Auth\Proprietaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerificationNotificationProprietairetaireController extends Controller
{
     /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
