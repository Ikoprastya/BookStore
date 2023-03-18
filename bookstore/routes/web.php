<?php

use App\Http\Livewire\Pages\FamousAuthor;
use App\Http\Livewire\Pages\InputRating;
use App\Http\Livewire\Pages\ListBooks;
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

Route::get('/', ListBooks::class)->name('listBook');
Route::get('/famous', FamousAuthor::class)->name('famousAuthor');
Route::get('/rating', InputRating::class)->name('inputRating');
