<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthAdminController;

//Home
Route::get('/', [HomeController::class, 'home']);
Route::get('/demande', [HomeController::class, 'demande']);
Route::get('/reclamation', [HomeController::class, 'reclamation']);

Route::get('/admin/dashboard/Reclamations_En_Cours', [AdminController::class, 'view_reclamation_en_cours']);
Route::get('/admin/dashboard/Demandes_En_Cours', [AdminController::class, 'view_demande_en_cours']);

Route::get('/admin/dashoard/Historiques_Reclamation', [AdminController::class, 'view_historique_reclamation']);
Route::get('/admin/dashboard/Historiques_Demande', [AdminController::class, 'view_historique_demande']);


//Etudiant
Route::post('ajouter_reclamation', [EtudiantController::class, 'ajouter_reclamation']);


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::match(['get', 'post'], '/admin/dashboard', [AdminController::class, 'handleDashboard'])->name('dashboard.handle');

Route::post('/admin/login', [AuthAdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthAdminController::class, 'logout'])->name('admin.logout');
