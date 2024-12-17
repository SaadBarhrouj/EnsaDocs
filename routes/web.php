<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\AttestationController;
use App\Http\Controllers\AuthAdminController;

//Home
Route::get('/', [HomeController::class, 'home']);
Route::get('/demande', [HomeController::class, 'demande']);
Route::get('/reclamation', [HomeController::class, 'reclamation']);


Route::get('/admin/dashboard/Demandes_En_Cours', [AdminController::class, 'view_demande_en_cours']);
Route::get('/admin/dashboard/Historiques_Demande', [AdminController::class, 'view_historique_demande']);


// Administrateur

Route::get('/admin/dashoard/Historiques_Reclamation', [AdminController::class, 'view_historique_reclamation'])->name('historiques.reclamation');
Route::get('/admin/dashboard/Reclamations_En_Cours', [AdminController::class, 'view_reclamation_en_cours']);


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::match(['get', 'post'], '/admin/dashboard', [AdminController::class, 'handleDashboard'])->name('dashboard.handle');

Route::post('/admin/login', [AuthAdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthAdminController::class, 'logout'])->name('admin.logout');

//Etudiant
Route::post('ajouter_reclamation', [EtudiantController::class, 'ajouter_reclamation']);

Route::post('/demande', [DocumentController::class, 'store'])->name('demande.store');
Route::post('/demande/valider/{id}', [DocumentController::class, 'valider'])->name('demande.valider');
Route::post('/demande/refuser/{id}', [DocumentController::class, 'refuser'])->name('demande.refuser');




Route::get('/admin/dashboard/Demandes_En_Cours', [DemandeController::class, 'index'])->name('demandes.en.cours');



Route::get('/attestation-document', [AttestationController::class, 'generateAttestation']);
Route::get('/convention-document', [ConventionController::class, 'downloadPDF']);


// Route to display all demandes
Route::get('/admin/dashboard/Historiques_Demande', [DemandeController::class, 'his'])->name('historiques.demandes');
Route::get('/download-releve', [PDFController::class, 'ReleveNotePDF']);
Route::get('/download-recommendation', [PDFController::class, 'LettreRecommendationPDF']);


Route::get('/reclamations_en_cours/{reclamation}',[AdminController::class, 'show_detail_reclamation'])->name('reclamation.details');
// Route::get('/historiques_reclamations/{reclamation}',[AdminController::class, 'show_detail_reclamation_historiques']);
