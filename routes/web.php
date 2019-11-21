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

Route::get('/', function () {
    //return view('welcome');

    return "<h1>Primeira lógica com laravel</h1>";
});

Route::get('/produtos', 'ProdutoController@Lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@Mostra')->where('id','[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@Novo');
Route::post('/produtos/adiciona/', 'ProdutoController@Adiciona');
Route::get('/produtos/json', 'ProdutoController@ListaJson');
Route::get('/produtos/remove/{id}', 'ProdutoController@Remove');
Route::get('/produtos/edita/{id}', 'ProdutoController@Edita');
Route::put('/produtos/atualiza/{id}', 'ProdutoController@Atualiza');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
