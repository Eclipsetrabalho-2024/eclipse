<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/pagina', 'PaginaController@index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

