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
Route::get('/citas/edit/{id}', 'CitasController@edit')->name('citas.edit');
Route::put('/citas/update/{id}', 'CitasController@update')->name('citas.update');
Route::get('/horarios', 'CitasController@horarios')->name('citas.horarios');
Route::get('/horariosEdit', 'CitasController@horariosEdit')->name('citas.horariosEdit');
Route::get('/citas/paciente/{id}', 'CitasController@paciente')->name('citas.paciente');
Route::delete('/citas/delete', 'CitasController@destroy')->name('citas.delete');
Route::post('/citas/buscarFecha', 'CitasController@buscarFecha')->name('citas.buscarFecha');
Route::post('/citas/buscarPaciente', 'CitasController@buscarPaciente')->name('citas.buscarPaciente');

//PACIENTES
Route::get('/pacientes', 'PacienteController@index')->name('paciente.list');
Route::get('/pacientes/nuevo', 'PacienteController@create')->name('paciente.new');
Route::post('/pacientes/crear', 'PacienteController@store')->name('paciente.create');
Route::get('/pacientes/edit/{id}', 'PacienteController@edit')->name('paciente.edit');
Route::put('/pacientes/update/{id}', 'PacienteController@update')->name('paciente.update');
Route::delete('/pacientes/delete', 'PacienteController@destroy')->name('paciente.delete');
Route::post('/pacientes/buscar', 'PacienteController@buscarPaciente')->name('paciente.buscar');
// felipe's test
Route::get('/test', 'testController@index')->name('permisos');
// felipe's test

//FICHA
Route::get('/ficha-paciente-{id}', 'FichaController@index')->name('ficha.list');
Route::get('/ficha-paciente/{id}', 'FichaController@create')->name('ficha.new');
Route::post('/ficha-paciente/create', 'FichaController@store')->name('ficha.create');
Route::get('/ficha-paciente/edit/{IdFicha}', 'FichaController@edit')->name('ficha.edit');
Route::put('/ficha-paciente/update/{id}', 'FichaController@update')->name('ficha.update');
Route::delete('/ficha-paciente/delete', 'FichaController@destroy')->name('ficha.delete');

//USUARIOS
Route::get('/usuarios', 'usuariosController@index')->name('usuarios');
//VENTAS
Route::get('/ventas', 'ventasController@index')->name('ventas');
//DATOS DE CONSULTA
Route::get('/consulta-paciente/{IdPaciente}', 'ConsultaController@index')->name('consulta.paciente');
//HISTORIAL
Route::get('/consulta-paciente/historial/{IdPaciente}', 'HistorialClinicoController@index')->name('consulta.historial');
Route::delete('/consulta-paciente/consulta/delete', 'HistorialClinicoController@deleteConsulta')->name('consulta.delete');
Route::get('/consulta-paciente/verAparatosSintomas/{IdConsulta}', 'HistorialClinicoController@verAparatosSintomas')->name('historial.verAparatosSintomas');
Route::get('/consulta-paciente/verSintomasSubjetivos/{IdConsulta}', 'HistorialClinicoController@verSintomasSubjetivos')->name('historial.verSintomasSubjetivos');
//CONSULTA
Route::post('/consulta-paciente/consulta/iniciarConsulta', 'ConsultaController@iniciarConsulta')->name('consulta.iniciar');
Route::post('/consulta-paciente/consulta/AparatosSistemas/guardar', 'ConsultaController@guardarConsultaAparatosSistemas')->name('consulta.GuardarAparatosSistemas');
Route::put('/consulta-paciente/consulta/AparatosSistemas/update', 'ConsultaController@updateConsultaAparatosSistemas')->name('consulta.updateAparatosSistemas');
Route::get('/consulta-paciente/consulta/AparatosSistemas/ver-{IdConsulta}', 'ConsultaController@verAparatosSistemas')->name('consulta.verAparatosSistemas');

Route::get('/consulta-paciente/consulta/SintomasSubjetivos', 'ConsultaController@consultaSintomasSubjetivos')->name('consulta.SintomasSubjetivos');
Route::post('/consulta-paciente/consulta/SintomasSubjetivos/guardar', 'ConsultaController@guardarConsultaSintomasSubjetivos')->name('consulta.GuardarSintomasSubjetivos');
Route::put('/consulta-paciente/consulta/SintomasSubjetivos/update', 'ConsultaController@updateConsultaSintomasSubjetivos')->name('consulta.updateSintomasSubjetivos');
Route::delete('/consulta-paciente/consulta/SintomasSubjetivos/delete', 'ConsultaController@deleteConsultaSintomasSubjetivos')->name('consulta.deleteSintomasSubjetivos');
Route::post('/consulta-paciente/consulta/finalizar', 'ConsultaController@finalizarConsulta')->name('consulta.finalizar');

//ANTECEDENTES
Route::get('/consulta-paciente/antecedentes/{IdPaciente}','AntecedentesController@index')->name('consulta.antecedentes');
//ESTUDIOS DE GABINETE
Route::get('/consulta-paciente/estidioGabinete/{IdPaciente}','EstudiosGabineteController@index')->name('consulta.estidioGabinete');