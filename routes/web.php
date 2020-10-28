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


Auth::routes();


Route::get('/test/nuevoPaciente', 'testController@nuevo')->name('paciente');
Route::post('/test/guardarPaciente', 'testController@store')->name('paciente.store');

Route::get('live', function () {
    return view('pacienteBlade');
});

//Rutas de cliente
Route::get('/', function () {
    return view('Cliente.inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('Cliente.nosotros');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('Cliente.servicios');
})->name('servicios');

Route::get('/contacto', function () {
    return view('Cliente.contacto');
})->name('contacto');

Route::get('/servicio-detallado', function () {
    return view('Cliente.servicio-detallado');
})->name('servicio-detallado');

Route::get('/consulta', function () {
    return view('Cliente.consulta-integral');
})->name('consulta');

//-------------------------------Rutas de administrador-------------------------------
Route::get('/home', 'HomeController@index')->name('home');
//CITAS
Route::get('/citas', 'CitasController@index')->name('citas.list');
Route::get('/citas/nueva', 'CitasController@create')->name('citas.new');
Route::post('/citas/crear', 'CitasController@store')->name('citas.create');
Route::get('/citas/edit/{id}', 'CitasController@show')->name('citas.edit');
Route::put('/citas/update/{id}', 'CitasController@update')->name('citas.update');

//PACIENTES
Route::get('/pacientes', 'PacienteController@index')->name('paciente.list');
Route::get('/pacientes/nuevo', 'PacienteController@create')->name('paciente.new');
Route::post('/pacientes/crear', 'PacienteController@store')->name('paciente.create');
Route::get('/pacientes/edit/{id}', 'PacienteController@show')->name('paciente.edit');
Route::put('/pacientes/update/{id}', 'PacienteController@update')->name('paciente.update');