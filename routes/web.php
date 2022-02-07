<?php

use App\Http\Controllers\EquipeController;
use App\Models\Continent;
use App\Models\Equipe;
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
    $equipes = Equipe::all();
    $continents = Continent::all();
    return view('home', compact('equipes', 'continents'));
})->name("home");


Route::post('/store', [EquipeController::class, "store"])->name("equipes.store");
