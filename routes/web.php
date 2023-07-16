<?php

use App\Models\Paiement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\auth\ContactController;
use App\Http\Controllers\Recherche\RechercheController;
use App\Http\Controllers\Recherche\DetailOffreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contactez-nous', function () {
    return view('help.contactez-nous');
});

Route::get('/comment-ca-marche', function () {
    return view('help.comment-ca-marche');
});

Route::get('/FAQ-Locataire', function () {
    return view('help.FAQ-Locataire');
});

Route::get('/FAQ-Proprietaire', function () {
    return view('help.FAQ-Proprietaire');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact', function () {
    return view('mails.contact');
});

Route::get('/mentions-legales', function () {
    return view('help.mension-legale');
});

Route::get('/politique-confidentialite', function () {
    return view('help.politique-confidentialite');
});
Route::get('/CGU', function () {
    return view('help.CGU');
});
Route::get('/condition-utilisation-loc', function () {
    return view('help.condition-utilisation-loc');
});
Route::get('/condition-utilisation-prop', function () {
    return view('help.condition-utilisation-prop');
});
Route::get('/commentaire', function () {
    return view('commentaire.commentaire');
});
Route::get('/commentaire', function () {
    return view('commentaire.commentaire');
});


Route::get('recherche', [RechercheController::class, 'Recherche'])->name('recherche.from.homme');
Route::get('resultat', [RechercheController::class, 'search'])->name('resultat.from.homme');

Route::get('/search', [RechercheController::class, 'find'])->name('search.search');

//routes details chambre et appartement
Route::get('/detail-chambre/{id}', [DetailOffreController::class, 'DetailChambre'])->name('detail.chambre');
Route::get('/detail-appartement/{id}', [DetailOffreController::class, 'DetailAppartement'])->name('detail.appartement');


Route::get('/payment/{type}/{id}', [PaiementController::class, 'getPaymentLink']);

require __DIR__ . '/auth.php';
