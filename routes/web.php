<?php

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
    return view('welcome');
});

Route::get('/produto/novo','ProdutosController@formularioCriacao');

Route::post('/produto/novo','ProdutosController@registrarProduto')->name('registrar_produto');

Route::get('/produto/ver/{id}','ProdutosController@verProduto');

Route::get('/produto/editar/{id}','ProdutosController@editarProduto');

Route::post('/produto/editar/{id}','ProdutosController@salvarEdicao')->name('editar_produto');


