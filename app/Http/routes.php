<?php
Route::get('/', function () {
	//return view('home'); 
	return "usando git";
});

Route::POST('/form','ambientesController@show');
//controladores
Route::get('Controller','ambientesController@index');