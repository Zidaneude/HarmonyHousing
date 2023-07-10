<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\AuthenticatedSessionAdminController;


Route::get('admin-login', [AuthenticatedSessionAdminController::class, 'create'])
->name('connexion.admin.create');

Route::post('connexion-admin', [AuthenticatedSessionAdminController::class, 'store'])
->name('connexion.admin.store');
?>