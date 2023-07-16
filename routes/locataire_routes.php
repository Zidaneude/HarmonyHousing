<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Locataire\ProfilLocataireController;
use App\Http\Controllers\Auth\Locataire\RegisteredLocataireController;
use App\Http\Controllers\Auth\Locataire\NewPasswordLocataireController;
use App\Http\Controllers\Auth\Locataire\PasswordResetLinkLocataireController;
use App\Http\Controllers\Auth\Locataire\ConfirmablePasswordLocataireController;
use App\Http\Controllers\Auth\Locataire\AuthenticatedSessionLocataireController;
use App\Http\Controllers\Auth\Locataire\EmailVerificationPromptLocattaireController;
use App\Http\Controllers\Auth\Locataire\EmailVerificationNotificationLocataireController;
use App\Http\Controllers\Locataire\LocataireController;
use App\Models\Locataire;

// route locataire


Route::middleware('guest')->group(function () {

        Route::get('connexion-locataire', [AuthenticatedSessionLocataireController::class, 'create'])
                ->name('connexion.locataire.create');

        Route::post('connexion-locataire', [AuthenticatedSessionLocataireController::class, 'store'])
                ->name('connexion.locataire.store');
                
        Route::get('inscription-locataire', [RegisteredLocataireController::class, 'create'])
                ->name('inscription.locataire.create');

        Route::post('inscription-locataire', [RegisteredLocataireController::class, 'store'])
                ->name('inscription.locataire.store');

        Route::get('forgot-passwordl', [PasswordResetLinkLocataireController::class, 'create'])
                ->name('password.request.l');

        Route::post('forgot-passwordl', [PasswordResetLinkLocataireController::class, 'store'])
                ->name('password.email.l');

        Route::get('reset-password/{token}', [NewPasswordLocataireController::class, 'create'])
                ->name('password.reset');

        Route::post('reset-password', [NewPasswordLocataireController::class, 'store'])
                ->name('password.update');
});


Route::get('/reservation-locataire', [ReservationController::class, 'create'])
        ->name('reservation.locataire');
  
Route::get('profil-locataire', [ProfilLocataireController::class, 'create'])
        ->name('profil.locataire.create');

Route::post('profil-locataire/{id}', [ProfilLocataireController::class, 'update'])
        ->name('profil.locataire.update');


Route::delete('delete-compte/{id}', [ProfilLocataireController::class, 'destroy'])
        ->name('delete.locataire');

Route::get('/locataire-dashboard', [LocataireController::class, 'create'])
        ->name('locataire.dashboard');

        //'auth:locataire' ...........................

Route::middleware('auth:locataire')->group(function () {


        Route::get('verify-email', [EmailVerificationPromptLocattaireController::class, '__invoke'])
                ->name('verification.notice');

        Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

        Route::post('email/verification-notification', [EmailVerificationNotificationLocataireController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

        Route::get('confirm-password', [ConfirmablePasswordLocataireController::class, 'show'])
                ->name('password.confirm');

        Route::post('confirm-password', [ConfirmablePasswordLocataireController::class, 'store']);

        Route::get('logout-locataire', [AuthenticatedSessionLocataireController::class, 'destroy'])
                ->name('logout.locataire');

});






?>