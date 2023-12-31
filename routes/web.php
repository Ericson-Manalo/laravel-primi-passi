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
        'listItems' => [
            [
                'ref' => route('home'),
                'element' => 'Home',
            ],
            [   
                'ref' => route('download'),
                'element' => 'Scarica',
            ],
            [
                'ref' => route('why'),
                'element' => 'Perché Discord',
            ],
            [
                'ref' => route('nitro'),
                'element' => 'Nitro',
            ],
            [
                'ref' => route('security'),
                'element' => 'Sicurezza',
            ],
            [   
                'ref' => route('assistance'),
                'element' => 'Assistenza',
            ]
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/download', function () {

    return view('download');
})->name('download');




Route::get('/why', function () {

    return view('why');
})->name('why');




Route::get('/nitro', function () {

    return view('nitro');
})->name('nitro');




Route::get('/security', function () {

    return view('security');
})->name('security');




Route::get('/assistance', function () {

    return view('assistance');
})->name('assistance');