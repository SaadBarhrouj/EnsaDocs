<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\AttestationController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/demande', [HomeController::class, 'demande']);
Route::get('/reclamation', [HomeController::class, 'reclamation']);

// 
Route::get('/dashboard', [AdminController::class, 'view_dashboard'])->name('dashboard');
Route::get('Reclamations_En_Cours', [AdminController::class, 'view_reclamation_en_cours']);
Route::get('Demandes_En_Cours', [AdminController::class, 'view_demande_en_cours']);

Route::get('/admin/dashboard/Historiques_Reclamation', [AdminController::class, 'view_historique_reclamation']);
Route::get('/admin/dashboard/Historiques_Demande', [AdminController::class, 'view_historique_demande']);



// Traiter la connexion Administrateur 
Route::post('/login', [AuthController::class, 'login'])->name('login');

//Etudiant
Route::post('ajouter_reclamation', [EtudiantController::class, 'ajouter_reclamation']);

Route::post('/demande', [DocumentController::class, 'store'])->name('demande.store');

Route::get('/admin/dashboard/Demandes_En_Cours', [DemandeController::class, 'index']);

Route::get('/attestation-document', [AttestationController::class, 'generateAttestation']);
Route::get('/convention-document', [ConventionController::class, 'downloadPDF']);



// Route to display all demandes
Route::get('/admin/dashboard/Historiques_Demande', [DemandeController::class, 'his']);

// Déconnexion de l'administrateur
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');;
?>
