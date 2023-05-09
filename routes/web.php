<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'title' => 'Laravel',
        'subtitle' => 'First Steps',
        'message' => 'Make yourself at "home"',
        'todos' => [
            [
                'task' => 'Creare un progetto Laravel',
                'done' => true,
            ],[
                'task' => 'Cancellare il file "welcome"',
                'done' => true,
            ],[
                'task' => 'Creare un file "home"',
                'done' => true,
            ],[
                'task' => 'Cambiare la Route verso il file "home"',
                'done' => true,
            ],[
                'task' => 'Stampare "Hello World!"',
                'done' => true,
            ],[
                'task' => 'Passare dei dati in view per scriverli dinamicamente in "home"',
                'done' => true,
            ],[
                'task' => 'Creare più pagine',
                'done' => true,
            ],[
                'task' => 'Creare una navbar con i link alle pagine usando la funzione route()',
                'done' => false,
            ],
        ]
    ];

    return view('home',$data);
})->name('home');