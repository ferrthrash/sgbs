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
    return view('welcome');
});
Route::get('/test', function () {
    return view('prueba1');
});
Route::get('/holalucho', function () {
    return view('prueba1');
});
Route::get('/plantilla', function () {
    return view('plantilla.home');
});
Route::get('/demo1', function () {
    return view('demos.demo1');
});
Route::get('/demo2', function () {
    return view('demos.demo2');
});
Route::get('/demo3', function () {
    return view('demos.demo3');
});
//RUTAS DE SGBS
Route::get('/demoportada', function () {
    return view('portada.index');
});
Route::get('/publicacion', function () {
    return view('portada.publicacion');
});
// RUTAS DE SISTEMA ERP
Route::get('/erphome', function () {
    return view('erp.index');
});
