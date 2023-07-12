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

Route::get('admin/verify-offre', [AdminController::class, 'gestionOfrre'])
->name('admin.dasboard.gestion_offre');


Route::get('admin/rejeter/{id}', [AdminController::class, 'RejeterOfrre'])
->name('admin.dasboard.gestion_offre_rejeter');

Route::get('admin/approuver/{id}', [AdminController::class, 'ApprouverOfrre'])
->name('admin.dasboard.gestion_offre_approuver');

Route::get('admin/detail/{id}', [AdminController::class, 'DetailOffre'])
->name('admin.dasboard.detail.offre');

?>
