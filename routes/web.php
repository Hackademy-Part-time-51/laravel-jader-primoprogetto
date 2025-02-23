<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'homepage']);
Route::get('/SuDiMe', [PageController::class, 'aboutMe']);
Route::get('/contatti', [pageController::class,'contatti']);
Route::get('/servizi', [pageController::class,'services']);
Route::get('/servizio/{parametro}', [PageController::class, 'service']);


