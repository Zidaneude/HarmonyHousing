<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Profil;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GererRolesController;
use App\Http\Controllers\Auth\Admin\AuthenticatedSessionAdminController;


Route::get('admin-login', [AuthenticatedSessionAdminController::class, 'create'])
->name('connexion.admin.create');

Route::post('admin-login', [AuthenticatedSessionAdminController::class, 'store'])
->name('connexion.admin.store');

Route::get('admin/dasboard', [AdminController::class, 'create'])
->name('admin.dasboard.create');
Route::get('logout-admin', [AuthenticatedSessionAdminController::class, 'destroy'])
        ->name('logout.admin');

Route::get('gerer-roles', [GererRolesController::class, 'create'])
       ->name('gerer.roles.create');

Route::post('gerer-roles', [GererRolesController::class, 'store'])
       ->name('gerer.roles.store');

Route::get('delete-compte/{id}', [GererRolesController::class, 'destroy'])
       ->name('delete.compte.destroy');

Route::post('gerer-roles-update/{id}', [GererRolesController::class, 'update'])
       ->name('roles.update');

Route::get('admin/verify-offre', [AdminController::class, 'gestionOfrre'])
->name('admin.dasboard.gestion_offre');


Route::get('admin/rejeter/{id}', [AdminController::class, 'RejeterOfrre'])
->name('admin.dasboard.gestion_offre_rejeter');

Route::get('admin/approuver/{id}', [AdminController::class, 'ApprouverOfrre'])
->name('admin.dasboard.gestion_offre_approuver');

Route::get('admin/detail/{id}', [AdminController::class, 'DetailOffre'])
->name('admin.dasboard.detail.offre');
Route::get('admin/avis', [AdminController::class, 'AvisManager'])
->name('admin.dasboard.avis');
Route::get('admin/profil',[Profil::class,'create'])->name('admin.profil');
Route::get('admin/historique-reservation',[AdminController::class,'HistoriqueResevation'])->name('admin.historique.reservation');

?>
