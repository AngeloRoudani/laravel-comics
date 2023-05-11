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
        'comics' => config('db'),
        'links' => [
            'home',
            'about',
            'news',
            'shop'
        ],
        'icons' => [
            'resources/img/icon/fb.png',
            'resources/img/icon/pr.png',
            'resources/img/icon/pt.png',
            'resources/img/icon/tw.png', 
            'resources/img/icon/yt.png'
        ]
    ];

    return view('home', $data);
})->name('home');





