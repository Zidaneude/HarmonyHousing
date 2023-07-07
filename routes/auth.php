<?php

use App\Models\Proprietaire;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\LocataireController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\Locataire\RegisteredLocataireController;
use App\Http\Controllers\Auth\Admin\AuthenticatedSessionAdminController;
use App\Http\Controllers\Auth\Proprietaire\RegisteredProprietaireController;
use App\Http\Controllers\Auth\Locataire\PasswordResetLinkLocataireController;
use App\Http\Controllers\Auth\Locataire\AuthenticatedSessionLocataireController;
use App\Http\Controllers\Auth\Proprietaire\AuthenticatedSessionProprietaireController;

Route::middleware('guest')->group(function () {
    Route::get('inscription-proprietaire', [RegisteredUserController::class, 'create'])
        ->name('inscription.proprietaire');

    Route::post('inscription-proprietaire', [RegisteredUserController::class, 'store']);

    Route::get('login-proprietaire', [AuthenticatedSessionController::class, 'create'])
        ->name('login-proprietaire');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});



// route locataire
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
        
Route::get('profil-locataire', [LocataireController::class, 'create'])
        ->name('profil-locataire');

//Addmin

Route::get('connexion-admin', [AuthenticatedSessionAdminController::class, 'create'])
->name('connexion.admin.create');

Route::post('connexion-admin', [AuthenticatedSessionAdminController::class, 'store'])
->name('connexion.admin.store');




