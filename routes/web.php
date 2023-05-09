<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personajesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personajes', [personajesController::class, 'index']);
Route::get('/prueba', function () {
    $url="https://rickandmortyapi.com/api/character";
        $personajes = json_decode(file_get_contents($url));
        return view('prueba', compact('personajes'));
});
