<?php
Route::get('/', function () {
	return view('home'); 
	//return "usando git";
});

Route::POST('/form','ambientesController@show');
//controladores
Route::get('Controller','ambientesController@index');

/*
Route::get('/nombre/{nombre}', function ($nombre) {
    return "pagina disponible ";
})->where('nombre', '[A-Za-z]+');

*/


