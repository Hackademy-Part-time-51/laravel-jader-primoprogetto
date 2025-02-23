<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $services = [
        [
            'title' => 'Sviluppo di siti web',
            'slug' => 'sviluppo-di-siti-web',
            'description' => 'Sviluppo di siti web con Html/Css, JS, Php e Laravel',
            'price' => 'A partire da 750 euro',
        ],
        [
            'title' => 'Creazione di Market e Ecommerce',
            'slug' => 'creazione-di-Market-e-Ecommerce',
            'description' => 'Sviluppo di Market e siti Ecommerce, crea da 0 la tua attività di vendita online accompagnato da un professionista',
            'price' => 'A partire da 1250 euro',
        ],
        [
            'title' => 'Consulenze a distanza',
            'slug' => 'consulenze-a-distanza',
            'description' => 'Consulenze a distanza su siti web, e-commerce e applicazioni',
            'price' => 'A partire da 300 euro',
        ],
    ];
    public function homepage() {
        return view('homepage');
    }
    public function aboutMe() {
        return view('su_di_me');
    }
    public function contatti() {
        return view('contatti');
    }
    public function services(){
        return view('servizi', ['services' => self::$services]);    
    }
    public function service($parametro) {
                
        foreach (self::$services as $service) {
            if ($parametro == $service['slug']) {
                return view('details', ['service' => $service]);
            }
        }
        abort(404);
        
        
    }
}
