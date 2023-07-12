<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\Admin\RegisteredAdminController;
use App\Http\Controllers\Auth\Admin\AuthenticatedSessionAdminController;


Route::get('admin-login', [AuthenticatedSessionAdminController::class, 'create'])
->name('connexion.admin.create');

Route::post('admin-login', [AuthenticatedSessionAdminController::class, 'store'])
->name('connexion.admin.store');

Route::get('admin/dasboard', [AdminController::class, 'create'])
->name('admin.dasboard.create');
Route::get('logout-admin', [AuthenticatedSessionAdminController::class, 'destroy'])
        ->name('logout.admin');
Route::get('ajouter-admin', [RegisteredAdminController::class, 'create'])
        ->name('ajouter.admin.create');
Route::post('ajouter-admin', [RegisteredAdminController::class, 'store'])
->name('ajouter.admin.store');
?>
