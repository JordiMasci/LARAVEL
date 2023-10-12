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
    $titolo = 'Prova lista';
    $arrayLista = [
        'Prova 1',
        'Prova 2',
        'Prova 3',
        'Prova 4',
    ];




    return view('home', [
        'titolo' => $titolo,
        'arrayLista' => $arrayLista,
    ]);
})->name('homepage');
