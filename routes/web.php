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
                'done' => true,
            ],
        ]
    ];

    $nav_links = [
        'home' => route('home'),
        'about' => route('about')
    ];

    $data['nav_links'] = $nav_links;

    return view('home',$data);

})->name('home');

Route::get('about', function (){

    $data = [
        'title' => 'About us',
        'section_title' => 'Us in 100* words',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eaque autem, odio delectus animi tempore quis dolorem modi. Aspernatur dignissimos necessitatibus nemo dolores labore, neque reprehenderit porro? Beatae quis incidunt quibusdam? Fuga optio quas, obcaecati et ex, eligendi quam similique facilis minima eveniet praesentium vero ea veniam? Quis recusandae blanditiis saepe quibusdam facere tenetur, a aspernatur necessitatibus quam error excepturi cum amet tempore atque optio fugit nihil in obcaecati quaerat accusamus eos cupiditate quo! Ab aliquam cumque perspiciatis nisi fugit ex facilis architecto ipsum adipisci, odit beatae sed illo praesentium temporibus. Inventore et quis tempora aliquid. Nulla soluta necessitatibus beatae.' ,
        'caption' => '(*we counted them for you)',
    ];

    $nav_links = [
        'home' => route('home'),
        'about' => route('about')
    ];

    $data['nav_links'] = $nav_links;

    return view('about',$data);

})->name('about');