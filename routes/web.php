<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/comment-ca-marche', function () {
    return view('help.comment-ca-marche');
});
Route::get('/mension-legale', function () {
    return view('help.mension-legale');
});
Route::get('/FAQ-Locataire', function () {
    return view('help.FAQ-Locataire');
});
Route::get('/FAQ-Proprietaire', function () {
    return view('help.FAQ-Proprietaire');
});
Route::get('/contactez-nous', function () {
    return view('help.contactez-nous');
});
Route::get('/contacter-nous', function () {
    return view('help.contacter-nous');
});
Route::get('/aide', function () {
    return view('help.aide');
});
Route::get('/commentaire', function () {
    return view('commentaire.commentaire');
});

require __DIR__ . '/auth.php';
