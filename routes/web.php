<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
 });

 Route::get('/SuDiMe', function () {
    return view('su_di_me');
 });

 Route::get('/contatti', function () {
    return view('contatti');
 });

Route::get('/servizi', function (){
    $services = ['Web', 'Market', 'Consulenza'];
    $titolo = 'Servizio offerto';
    return view('servizi',
     [
        'services' => $services,
        'titolo' => $titolo
    ]);
});

Route::get('/servizio/{parametro}', function($parametro) {
    return $parametro;
});


