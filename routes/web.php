<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\AttestationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\PDFController;
use App\Http\Middleware\CheckAdminAuthenticated;

// Home Routes
Route::get('/', [HomeController::class, 'home'])->name('home');                                                                       
Route::get('/demande', [HomeController::class, 'demande']);
Route::get('/reclamation', [HomeController::class, 'reclamation'])->name('home.reclamation');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');


// Admin Routes
Route::middleware([CheckAdminAuthenticated::class])->group(function () {
Route::get('/admin/dashboard/Demandes_En_Cours', [AdminController::class, 'view_demande_en_cours'])->name('demandes.en.cours');
Route::get('/admin/dashboard/Historiques_Demande', [AdminController::class, 'view_historique_demande'])->name('historiques.demandes');
Route::get('/admin/dashboard/Historique_reclamations', [AdminController::class, 'view_historique_reclamation'])->name('historiques.reclamation');
Route::get('/admin/dashboard/Historique_reclamations_En_Cours', [AdminController::class, 'view_reclamation_en_cours'])->name('reclamations.en.cours');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::post('/admin/logout', [AuthAdminController::class, 'logout'])->name('admin.logout');
Route::match(['get', 'post'], '/admin/dashboard', [AdminController::class, 'handleDashboard'])->name('dashboard.handle');

Route::get('/admin/dashboard/Historiques_Demande/filter/{filter}', [DemandeController::class, 'filterByDemandeHistoriques'])->name('demande_historique_filter');
Route::get('/admin/dashboard/Demandes_En_Cours/filter/{filter?}', [DemandeController::class, 'filterByDemandeEncours'])->name('demande_encours_filter');
Route::get('/admin/dashboard/Historique_reclamations/filter/{filter}', [DemandeController::class, 'filterByReclamationHistoriques'])->name('reclamation_historique_filter');
Route::get('/admin/dashboard/Historique_reclamations_En_Cours/filter/{filter}', [DemandeController::class, 'filterByReclamationEncours'])->name('reclamation_encours_filter');
});
// Admin Login/Logout
Route::post('/admin/login', [AuthAdminController::class, 'login'])->name('admin.login.submit');

// Etudiant Routes
Route::post('get_reclamation', [EtudiantController::class, 'get_reclamation']);
Route::post('ajouter_reclamation', [EtudiantController::class, 'ajouter_reclamation']);
Route::post('/demande', [DocumentController::class, 'store'])->name('demande.store');
Route::post('/demande/valider/{id}', [DocumentController::class, 'valider'])->name('demande.valider');
Route::post('/demande/refuser/{id}', [DocumentController::class, 'refuser'])->name('demande.refuser');
Route::get('/demande/{id}/preview', [DocumentController::class, 'preview'])->name('demande.preview');

// Display all demandes
// Route::get('/admin/dashboard/Demandes_En_Cours', [DemandeController::class, 'index'])->name('demandes.en.cours');
// Route::get('/admin/dashboard/Historiques_Demande', [DemandeController::class, 'his'])->name('historiques.demandes');

// PDF Routes
Route::get('/attestation-document', [AttestationController::class, 'generateAttestation']);
Route::get('/convention-document', [ConventionController::class, 'downloadPDF']);
Route::get('/download-releve', [PDFController::class, 'ReleveNotePDF']);
Route::get('/download-recommendation', [PDFController::class, 'LettreRecommendationPDF']);

// Historique_reclamations Routes
Route::get('/reclamations_en_cours/{reclamation}', [AdminController::class, 'show_detail_reclamation'])->name('reclamation.details');
Route::post('/reclamations_repondre/{reclamation}', [AdminController::class, 'reclamations_repondre'])->name('reclamation.repondre');
Route::get('/historiques_reclamations/{reclamation}', [AdminController::class, 'show_detail_reclamation_historiques'])->name('reclamation.show');
