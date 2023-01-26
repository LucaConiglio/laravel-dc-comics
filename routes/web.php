<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
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

//Home
Route::get('/', [ComicController::class, "app"])->name("app");

// Read - Rotta che legge tutti gli elementi presenti nella tabella products
// La risorsa / entità dovrà chiamarsi come la tabella, in lowercase, al plurale
//Index
Route::get('/comics', [ComicController::class, "index"])->name("comics.index");

// Create - Rotta che mostrerà una view con in form al suo interno dove poter inserire i dati
Route::get('/comics/create', [ComicController::class, "create"])->name("comics.create");

// Store - Rotta che riceve i dati da un form e li salva nella tabella products
Route::get('/comics', [ComicController::class, "store"])->name("comics.store");

// Show - Rotta che legge un singolo elemento della tabella products
Route::get('/comics/show', [ComicController::class, "show"])->name("comics.show");