<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'welcome']);

Route::get('about', [Controller::class, 'about']);

Route::get('books', [Controller::class, 'books']);

Route::get('books/{slug}', [Controller::class, 'book']);

Route::get('now', [Controller::class, 'now']);
