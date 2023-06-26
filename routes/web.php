<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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

Route::get('/inscription-locataire', function () {
    return view('inscription-locataire');
});

Route::get('/inscription-proprietaire', function () {
    return view('inscription-proprietaire');
});

Route::get('/connexion-locataire', function () {
    return view('connexion-locataire');
});

Route::get('/connexion-proprietaire', function () {
    return view('connexion-proprietaire');
});

Route::get('/admin', function () {
    return view('connexion-admin');
});

Route::get('/dashboard-proprietaire', function () {
    return view('dashboard-proprietaire');
});

Route::get('/profil-proprietaire', function () {
    return view('profil-proprietaire');
});

Route::get('/soumission-offre', function () {
    return view('soumission-offre-proprietaire');
});

//Route::get('/payment', 'PaymentController@getPaymentLink');
Route::get('/payment', [PaymentController::class, 'getPaymentLink']);
