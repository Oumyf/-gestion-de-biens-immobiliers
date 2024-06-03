<?php

use App\Http\Controllers\BienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bien', [BienController::class, 'ListeBien'])->name('Bien.index');
Route::get('/ajouter', [BienController::class, 'ajouterBien']);
Route::post('/ajouterBien/Traitement', [BienController::class, 'ajouterBienTraitement'])->name('Bien.ajouterBien');
Route::get('/modifier-bien/{{id}}', [BienController::class, 'ajouterBien']);
Route::post('/modifierBien/Traitement', [BienController::class, 'modifierBienTraitement'])->name('Bien.modifierBien');
Route::get('/supprimer-bien/{id}', [BienController::class, 'supprimerBien'])->name('bien.supprimer');
