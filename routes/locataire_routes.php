<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Locataire\ProfilLocataireController;
use App\Http\Controllers\Auth\Locataire\RegisteredLocataireController;
use App\Http\Controllers\Auth\Locataire\PasswordResetLinkLocataireController;
use App\Http\Controllers\Auth\Locataire\AuthenticatedSessionLocataireController;

// route locataire


Route::middleware('guest')->group(function () {
});
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
        
Route::get('profil-locataire', [ProfilLocataireController::class, 'create'])
        ->name('profil.locataire.create');

Route::post('profil-locataire/{id}', [ProfilLocataireController::class, 'update'])
        ->name('profil.locataire.update');

Route::get('logout-locataire', [AuthenticatedSessionLocataireController::class, 'destroy'])
        ->name('logout.locataire');
Route::get('delete-compte/{id}', [ProfilLocataireController::class, 'destroy'])
        ->name('delete.locataire');

Route::middleware('auth')->group(function () {
});

Route::get('/reservation-locataire', [ReservationController::class, 'create'])
        ->name('reservation.locataire');

Route::get('/affichage-resultats', function () {
        return view('recherche.affichage-resultats');
        })->name('affichage.resultat');
Route::get('/details-offre', function () {
        return view('recherche.details-offre');
        });
?>