<?php

Route::view('/', "enunciado");
Route::get('/clientes', "clientesController@mostrar");
Route::get('/hotels', "hotelesController@mostrar");
Route::view('/form', "/cliente/form");
Route::view('/reserva', "/reserva/list");

