<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DemandeController;
use App\Models\etudiantModel;

//Home
Route::get('/', [HomeController::class, 'home']);
Route::get('/demande', [HomeController::class, 'demande']);
Route::get('/reclamation', [HomeController::class, 'reclamation']);

Route::get('/admin/dashboard', [AdminController::class, 'view_dashboard']);
Route::get('/admin/dashboard/Reclamations_En_Cours', [AdminController::class, 'view_reclamation_en_cours']);
Route::get('/admin/dashboard/Demandes_En_Cours', [AdminController::class, 'view_demande_en_cours']);

Route::get('/admin/dashoard/Historiques_Reclamation', [AdminController::class, 'view_historique_reclamation']);
Route::get('/admin/dashboard/Historiques_Demande', [AdminController::class, 'view_historique_demande']);


// Administrateur 
Route::get('/admin/dashboard', [AdminController::class, 'index']);


//Etudiant
Route::post('ajouter_reclamation', [EtudiantController::class, 'ajouter_reclamation']);

Route::post('/demande', [DocumentController::class, 'store'])->name('demande.store');




Route::get('/admin/dashboard/Demandes_En_Cours', [DemandeController::class, 'index']);
