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

/* Rotas do jogador */
Route::get("/","JogadorController@index");
Route::resource("jogador","JogadorController");
route::get("/jogadores","JogadorController@index");

/* Rotas da partida */
Route::resource("partida","PartidaController");
route::get("/partidas","PartidaController@index");

/* Rotas dos comentários */
Route::resource("comentario","ComentarioController")->except(["index","show","create","store"]);
Route::post("/comentario/{jogador}","ComentarioController@store");
