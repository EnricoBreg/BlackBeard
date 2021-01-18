<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'ExpenseController@index')->name('home');

/** Per creare tutte le rotte per il CRUD completo di una risorsa senza farlo manualmente */
Route::resource('expense', 'ExpenseController')->except(['destroy']); // except(...) costruisce tutte le rotte tranne per la destroy

Route::get('/expenses/{expense}/delete', 'ExpenseController@destroy');