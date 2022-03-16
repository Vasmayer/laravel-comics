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
    return view('home');
})->name('home');

Route::get('/comics', function () {

    $comics = config('comics');

    return view('comic.index',compact('comics'));
})->name('comic.index');

Route::get('/comics/{id}',function($id)
{
    $comics = config('comics');
    $comic = $comics[$id];
    return view('comic.show',compact('comic'));
})->name('comic.show');
