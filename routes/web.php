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
});
//ruta de controlador 
Route::get('categorias',"CategoriaController@index");
//añadr categoria
Route::get('categorias/create',"CategoriaController@create");
//guardar la nueva categoria
Route::post('categorias/store',"CategoriaController@store");
Route::get('categorias/edit{idcategoria}',"CategoriaController@edit");
//para guardar cambios en la categoria
Route::post('categorias/update',"CategoriaController@update");
    





