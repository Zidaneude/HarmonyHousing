<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiRest\Locataire\registerController;
use App\Http\Controllers\ApiRest\Locataire\ApiLocataireControlleur;
use App\Http\Controllers\ApiRest\Proprietaire\ApiProprietaireControlleur;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get("/locataires",[ApiLocataireControlleur::class,'index']);
Route::post("/locataires",[ApiLocataireControlleur::class,'inscription']);
Route::get("/locataires/{id}",[ApiLocataireControlleur::class,'Locataire']);
Route::delete("/locataires/{id}",[ApiLocataireControlleur::class,'deleleLocataire']);
Route::post("locataires/uploadprofile",[ApiLocataireControlleur::class,'uploadImage']);

Route::put("/locataires/{id}/nom",[ApiLocataireControlleur::class,'updateNom']);
Route::put("/locataires/{id}/prenom",[ApiLocataireControlleur::class,'updatePrenom']);
Route::put("/locataires/{id}/email",[ApiLocataireControlleur::class,'updateEmail']);
Route::put("/locataires/{id}/phone",[registerController::class,'updatePhone']);
Route::put("/locataires/{id}/sexe",[registerController::class,'updateSexe']);
Route::put("/locataires/{id}/presentation",[ApiLocataireControlleur::class,'updaPresentation']);
Route::post("/locataires/reset",[ApiLocataireControlleur::class,'resetpassword']);



Route::get("/proprietaires",[ApiProprietaireControlleur::class,'index']);
Route::post("/proprietaires",[ApiProprietaireControlleur::class,'inscription']);
Route::get("/proprietaires/{id}",[ApiProprietaireControlleur::class,'proprietaire']);
Route::delete("/proprietaires/{id}",[ApiProprietaireControlleur::class,'deleleproprietaire']);
Route::post("/proprietaires/login",[ApiProprietaireControlleur::class,'login']);
Route::post("proprietaires/uploadprofile",[ApiProprietaireControlleur::class,'uploadImage']);

Route::post("/proprietaires/{id}/nom",[ApiProprietaireControlleur::class,'updateNom']);
Route::post("/proprietaires/{id}/prenom",[ApiProprietaireControlleur::class,'updatePrenom']);
Route::post("/proprietaires/{id}/email",[ApiProprietaireControlleur::class,'updateEmail']);
Route::post("/proprietaires/{id}/phone",[ApiProprietaireControlleur::class,'updatePhone']);
Route::post("/proprietaires/{id}/sexe",[ApiProprietaireControlleur::class,'updateSexe']);
Route::post("/proprietaires/{id}/presentation",[ApiProprietaireControlleur::class,'updaPresentation']);
Route::post("/proprietaires/logout",[ApiProprietaireControlleur::class,'logout']);
