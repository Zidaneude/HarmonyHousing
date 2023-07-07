<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\Proprietaire\ProfilControlleur;
use App\Http\Controllers\Proprietaire\SoumissionOffreControlleur;
use App\Http\Controllers\Proprietaire\SoumissionOfreFormOneControlleur;
use App\Http\Controllers\Auth\Proprietaire\RegisteredProprietaireController;
use App\Http\Controllers\Auth\Proprietaire\NewPasswordProprietaireController;
use App\Http\Controllers\Auth\Proprietaire\PasswordResetLinkProprietaireController;
use App\Http\Controllers\Auth\Proprietaire\ConfirmablePasswordProprietaireController;
use App\Http\Controllers\Auth\Proprietaire\AuthenticatedSessionProprietaireController;
use App\Http\Controllers\Auth\Proprietaire\EmailVerificationPromptProprietaireController;

/*
|--------------------------------------------------------------------------
| Routes proprietaire
|--------------------------------------------------------------------------
*/

//:proprietaire

Route::middleware('guest:proprietaire')->group(static function () {

    Route::get('connexion-proprietaire', [AuthenticatedSessionProprietaireController::class, 'create'])
    ->name('connexion.proprietaire.create');

    Route::post('connexion-proprietaire', [AuthenticatedSessionProprietaireController::class, 'store'])
        ->name('connexion.proprietaire.store');

    Route::get('inscription-proprietaire', [RegisteredProprietaireController::class, 'create'])
        ->name('inscription.proprietaire.create');

    Route::post('inscription-proprietaire', [RegisteredProprietaireController::class, 'store'])
        ->name('inscription.proprietaire.store');

    Route::get('forgot-password', [PasswordResetLinkProprietaireController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkProprietaireController::class, 'store'])
            ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordProprietaireController::class, 'create'])
            ->name('password.reset');

    Route::post('reset-password', [NewPasswordProprietaireController::class, 'store'])
            ->name('password.update');
});


 Route::middleware('auth:proprietaire')->group(function () {

    Route::get('verify-email', [EmailVerificationPromptProprietaireController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
            ->middleware(['signed', 'throttle:6,1'])
            ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationProprietairetaireController::class, 'store'])
             ->middleware('throttle:6,1')
            ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordProprietaireController::class, 'show'])
            ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordProprietaireController::class, 'store']);

    Route::get('logout', [AuthenticatedSessionProprietaireController::class, 'destroy'])->name('logout');

    Route::get('proprietaire-dashbord', [ProprietaireController::class, 'create'])
                    ->name('proprietaire-dashbord');

    Route::get('/soumission_offre', [SoumissionOfreFormOneControlleur::class, 'create'])
            ->name('soumission.offre');

    Route::post('/soumission_offre', [SoumissionOfreFormOneControlleur::class, 'store'])
            ->name('soumission.offre.store');
    Route::get('/profil-pro', [ProfilControlleur::class, 'create'])
            ->name('profil.pro');


    Route::get("/reser",[ProfilControlleur::class, 'aff']);




});

Route::get('/g', [SoumissionOffreControlleur::class, 'test']);
?>

