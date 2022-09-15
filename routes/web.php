<?php


use App\Http\Controllers\MeuControlador;
use Illuminate\Support\Facades\Blade;
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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', function () {
    return view('outros.produtos');
})->name('produtos');
Route::get('departamentos', function () {
    return view('outros.departamentos');
})->name('departamentos');
Route::get('/nome', 'App\Http\Controllers\MeuControlador@getNome');
Route::get('/idade', 'App\Http\Controllers\MeuControlador@getIdade');
Route::get('/multiplicar/{n1}/{n2}', 'App\Http\Controllers\MeuControlador@multiplicar');

Route::resource('clientes' , 'App\Http\Controllers\ClienteControlador');

Route::get('opcoes/{opcao?}', function($opcao=null) {
    return view('outros.opcoes',compact(['opcao']));
})->name('opcoes');


Route::get('bootstrap', function(){
		return view('outros.exemplo');
});