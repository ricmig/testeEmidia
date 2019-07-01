<?php

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
use Illuminate\Http\Request;

Route::get('/cadastrar-receita', 'ReceitaController@registerNewReceita');
Route::post('/cadastrar-receita', 'ReceitaController@setNewReceita');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/receitas',  'ReceitaController@mostrarReceitas');
Route::get('/receita/{id}', 'ReceitaController@filtrarReceitaPorCategoria');



