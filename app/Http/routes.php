<?php
Route::get('/', function () {
	return view('website.index'); 
	//return "usando git";
});

Route::get('/tienda', function(){
return view('website.tienda');
});
//Route::POST('/form','ambientesController@store');
//controladores
//Route::get('Controller','ambientesController@index');


/*
Route::get('/nombre/{nombre}', function ($nombre) {
    return "pagina disponible ";
})->where('nombre', '[A-Za-z]+'); 
*/

 


