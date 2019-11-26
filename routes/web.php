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
Route::get('/produtos/mostra/{produto}', 'ProdutoController@Mostra')->where('id','[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@Novo');
Route::post('/produtos/adiciona/', 'ProdutoController@Adiciona');
Route::get('/produtos/json', 'ProdutoController@ListaJson');
Route::get('/produtos/{produto}', 'ProdutoController@Remove');
Route::get('/produtos/{produto}/edita/', 'ProdutoController@Edita');
Route::put('/produtos/{produto}', 'ProdutoController@Atualiza');
Route::post('/produtos/busca', 'ProdutoController@Busca');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
