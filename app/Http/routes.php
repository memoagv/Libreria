<?php
Route::get('/', function () {
	return view('home'); 
});

Route::POST('/form','ambientesController@show');
//controladores
Route::get('Controller','ambientesController@index');