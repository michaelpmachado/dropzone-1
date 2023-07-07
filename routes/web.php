<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\conteudoController;

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
    return view('welcome');
});

/* Route::get('/conteudos/list', function () {
    return view ('conteudos.index');
})->name('index');

Route::get('/conteudos', function () {
    return view ('conteudos.index');
});
*/
Route::resource('conteudos', ConteudoController::class);
