<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HttpClient;

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

Route::get('/books', [HttpClient::class, 'getBooks'])->name('books');

Route::get('/getDetails', [HttpClient::class, 'getDetails']);

Route::get('/bookDetails', function () {
    return view('details');
})->name('bookDetails');

