<?php

use App\Http\Controllers\BienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bien' , [BienController::class,'ListeBien']);
Route::get('/ajouter' , [BienController::class,'ajouterBien']);
Route::post('/ajouterBien/Traitement' , [BienController::class,'ajouterBienTraitement'])->name('Bien.ajouterBien















');

