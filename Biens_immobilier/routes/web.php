<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CommentaireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bien', [BienController::class, 'ListeBien'])->name('Bien.index');
Route::get('/bien/{id}', [BienController::class, 'afficher_details'])->name('bien.details');
Route::get('/ajouter', [BienController::class, 'ajouterBien']);
Route::post('/ajouterBien/Traitement', [BienController::class, 'ajouterBienTraitement'])->name('Bien.ajouterBien');
Route::get('/modifier-bien/{id}', [BienController::class, 'modifierBien'])->name('Bien.modifierBien');
Route::post('/modifierBien/Traitement', [BienController::class, 'modifierBienTraitement'])->name('Bien.modifierBien');
Route::get('/supprimer-bien/{id}', [BienController::class, 'supprimerBien'])->name('bien.supprimer');



// Route pour créer un nouveau commentaire
Route::get('/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');

// Route pour afficher le formulaire de modification d'un commentaire
Route::get('/commentaires/{id}/modifier', [CommentaireController::class, 'modifier'])->name('commentaires.mettre_a_jour');

// Route pour mettre à jour un commentaire
Route::put('/commentaires/{id}', [CommentaireController::class, 'modifierTraitement'])->name('commentaires.modifier');

// Route pour supprimer un commentaire
Route::delete('/commentaires/{id}', [CommentaireController::class, 'supprimer'])->name('commentaires.supprimer');
 


Route::get('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [AuthController::class, 'inscriptionPost'])->name('inscription');

Route::get('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::post('/connexion', [AuthController::class, 'connexionPost'])->name('connexion');


Route::get('/index', [AccueilController::class, 'index'])->name('index');
Route::delete('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');