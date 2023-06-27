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
        "headerLinks" => config('store.headerLinks'),
        "comicsArray" => config('comics'),
        'iconBarItems' => config('store.iconBarItems')
    ];

    return view('homepage', $data);
});

Route::get('/comics-{id}', function ($id) {
    $data = [
        "headerLinks" => config('store.headerLinks'),
        "comic" => config('comics')[$id],
        'iconBarItems' => config('store.iconBarItems'),
    ];
    return view('comic', $data);
})->name('comic');
