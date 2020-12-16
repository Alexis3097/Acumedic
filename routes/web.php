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
// Route::pattern('IdPaciente', '[0-9]+');


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
Route::group(['middleware' => ['permission:ListadoCitas|CrearCita|EditarCita|EliminarCita']], function () {
    Route::get('/citas', 'CitasController@index')->name('citas.list');
    Route::get('/citas/nueva', 'CitasController@create')->name('citas.new');
    Route::post('/citas/crear', 'CitasController@store')->name('citas.create');
    Route::get('/citas/edit/{id}', 'CitasController@edit')->name('citas.edit');
    Route::put('/citas/update/{id}', 'CitasController@update')->name('citas.update');
    Route::get('/horarios', 'CitasController@horarios')->name('citas.horarios');
    Route::get('/horariosEdit', 'CitasController@horariosEdit')->name('citas.horariosEdit');
    Route::get('/citas/paciente/{id}', 'CitasController@paciente')->name('citas.paciente');
    Route::delete('/citas/delete', 'CitasController@destroy')->name('citas.delete');
    Route::get('/citas/buscarFecha', 'CitasController@buscarFecha')->name('citas.buscarFecha');
    Route::get('/citas/buscarPaciente', 'CitasController@buscarPaciente')->name('citas.buscarPaciente');
});

//PACIENTES
Route::group(['middleware' => ['permission:ListadoPacientes|CrearPaciente|EditarPaciente|EliminarPaciente']], function () {
    Route::get('/pacientes', 'PacienteController@index')->name('paciente.list');
    Route::get('/pacientes/nuevo', 'PacienteController@create')->name('paciente.new');
    Route::post('/pacientes/crear', 'PacienteController@store')->name('paciente.create');
    Route::get('/pacientes/edit/{id}', 'PacienteController@edit')->name('paciente.edit');
    Route::put('/pacientes/update/{id}', 'PacienteController@update')->name('paciente.update');
    Route::delete('/pacientes/delete', 'PacienteController@destroy')->name('paciente.delete');
    Route::get('/pacientes/buscar', 'PacienteController@buscarPaciente')->name('paciente.buscar');
});

//FICHA
Route::group(['middleware' => ['permission:ListadoFicha|CrearFicha|EditarFicha|EliminarFicha']], function () {
    Route::get('/ficha-paciente-{id}', 'FichaController@index')->name('ficha.list');
    Route::get('/ficha-paciente/{id}', 'FichaController@create')->name('ficha.new');
    Route::post('/ficha-paciente/create', 'FichaController@store')->name('ficha.create');
    Route::get('/ficha-paciente/edit/{IdFicha}', 'FichaController@edit')->name('ficha.edit');
    Route::put('/ficha-paciente/update/{id}', 'FichaController@update')->name('ficha.update');
    Route::delete('/ficha-paciente/delete', 'FichaController@destroy')->name('ficha.delete');
});

//VENTAS
Route::get('/ventas', 'ventasController@index')->name('ventas');

//PERFIL DE CONSULTA
Route::group(['middleware' => ['permission:Consulta']], function () {
    //CONSULTA
    Route::get('/consulta-paciente/{IdPaciente}', 'PerfilConsultaController@index')->name('consulta.paciente');
});

//HISTORIAL
Route::group(['middleware' => ['permission:Historial']], function () {
    Route::get('/consulta-paciente/historial/{IdPaciente}', 'HistorialClinicoController@index')->name('consulta.historial');
    Route::delete('/consulta-paciente/consulta/delete', 'HistorialClinicoController@deleteConsulta')->name('consulta.delete');
    Route::get('/consulta-paciente/verAparatosSintomas/{IdConsulta}', 'HistorialClinicoController@verAparatosSintomas')->name('historial.verAparatosSintomas');
    Route::get('/consulta-paciente/verSintomasSubjetivos/{IdConsulta}', 'HistorialClinicoController@verSintomasSubjetivos')->name('historial.verSintomasSubjetivos');
});

//CONSULTA
Route::group(['middleware' => ['permission:InicarConsulta']], function () {
    //INICIAR CONSULTA
    Route::post('/consulta-paciente/consulta/iniciarConsulta', 'ConsultaController@iniciarConsulta')->name('consulta.iniciar');
    Route::post('/consulta-paciente/consulta/AparatosSistemas/guardar', 'ConsultaController@guardarConsultaAparatosSistemas')->name('consulta.GuardarAparatosSistemas');
    Route::put('/consulta-paciente/consulta/AparatosSistemas/update', 'ConsultaController@updateConsultaAparatosSistemas')->name('consulta.updateAparatosSistemas');
    Route::get('/consulta-paciente/consulta/AparatosSistemas/ver-{IdConsulta}', 'ConsultaController@verAparatosSistemas')->name('consulta.verAparatosSistemas');
    Route::get('/consulta-paciente/consulta/SintomasSubjetivos', 'ConsultaController@consultaSintomasSubjetivos')->name('consulta.SintomasSubjetivos');
    Route::post('/consulta-paciente/consulta/SintomasSubjetivos/guardar', 'ConsultaController@guardarConsultaSintomasSubjetivos')->name('consulta.GuardarSintomasSubjetivos');
    Route::put('/consulta-paciente/consulta/SintomasSubjetivos/update', 'ConsultaController@updateConsultaSintomasSubjetivos')->name('consulta.updateSintomasSubjetivos');
    Route::delete('/consulta-paciente/consulta/SintomasSubjetivos/delete', 'ConsultaController@deleteConsultaSintomasSubjetivos')->name('consulta.deleteSintomasSubjetivos');
    Route::post('/consulta-paciente/consulta/finalizar', 'ConsultaController@finalizarConsulta')->name('consulta.finalizar');
});
//-----------------------ANTECEDENTES-------------------
//ANTECEDENTES PATOLOGICOS
Route::group(['middleware' => ['permission:Antecedentes']], function () {
    Route::get('/consulta-paciente/antecedentes-patologicos/{IdPaciente}','AntecedentesController@patologico')->name('antecedente.patologico');
    Route::post('/consulta-paciente/antecedentes-patologicos/guardar','AntecedentesController@guardarPatologico')->name('antecedente.patologico.guardar');
    Route::put('/consulta-paciente/antecedentes-patologicos/actualizar','AntecedentesController@actualizarPatologico')->name('antecedente.patologico.actualizar');
    //ANTECEDENTES NO PATOLOGICOS
    Route::get('/consulta-paciente/antecedentes-NoPatologicos/{IdPaciente}','AntecedentesController@noPatologico')->name('antecedente.NoPatologico');
    Route::post('/consulta-paciente/antecedentes-NoPatologicos/guardar','AntecedentesController@guardarNoPatologico')->name('antecedente.NoPatologico.guardar');
    Route::put('/consulta-paciente/antecedentes-NoPatologicos/actualizar','AntecedentesController@actualizarNoPatologico')->name('antecedente.NoPatologico.actualizar');
    //ANTECEDENTES GINECOLOGICO
    Route::get('/consulta-paciente/antecedentes-ginecologicos/{IdPaciente}','AntecedentesController@ginecologico')->name('antecedente.ginecologico');
    Route::post('/consulta-paciente/antecedentes-ginecologicos/guardar','AntecedentesController@guardarGinecologico')->name('antecedente.ginecologico.guardar');
    Route::put('/consulta-paciente/antecedentes-ginecologicos/actualizar','AntecedentesController@actualizarGinecologico')->name('antecedente.ginecologico.actualizar');
     //ANTECEDENTES HEREDO FAMILIAREZ
    Route::get('/consulta-paciente/antecedentes-HFamiliarez/{IdPaciente}','AntecedentesController@familiares')->name('antecedente.familiares');
    Route::post('/consulta-paciente/antecedentes-HFamiliarez/guardar','AntecedentesController@guardarFamiliares')->name('antecedente.familiares.guardar');
    Route::put('/consulta-paciente/antecedentes-HFamiliarez/actualizar','AntecedentesController@actualizarHFamiliares')->name('antecedente.familiares.actualizar');
});

//ESTUDIOS DE GABINETE
Route::group(['middleware' => ['permission:EstudiosGabinete']], function () {
    Route::get('/consulta-paciente/estudioGabinete/{IdPaciente}','EstudiosGabineteController@index')->name('consulta.estudioGabinete');
    Route::post('/consulta-paciente/estudioGabinete','EstudiosGabineteController@guardarFoto')->name('consulta.guardarFoto');
    Route::post('/consulta-paciente/estudioGabinete/eliminar','EstudiosGabineteController@eliminarFoto')->name('consulta.eliminarFoto');
});

// USUARIOS
Route::group(['middleware' => ['permission:ListadoUsuarios|CrearUsuario|EditarUsuario|EliminarUsuario']], function () {
    Route::get('/usuarios','usuariosController@index')->name('usuarios.list');
    Route::get('/usuarios/nuevo','usuariosController@create')->name('usuarios.new');
    Route::post('/usuarios/guardar','usuariosController@store')->name('usuarios.create');
    Route::get('/usuarios/editar/{IdUsuario}','usuariosController@edit')->name('usuarios.edit');
    Route::put('/usuarios/actualizar/{IdUsuario}','usuariosController@update')->name('usuarios.update');
    Route::delete('/usuarios/eliminar','usuariosController@delete')->name('usuarios.delete');
    Route::get('/usuarios/buscar', 'usuariosController@buscarUsuario')->name('usuarios.buscar');
});
// PRODUCTOS
Route::get('/productos', 'ProductosController@index')->name('productos.list');
Route::get('/productos/nuevo', 'ProductosController@create')->name('productos.create');

//=============================PERMISOS================================================================
Route::group(['middleware' => ['permission:ListarRoles|CrearRol|EditarRol|EliminarRol']], function () {
    Route::get('/roles','PermisosController@rol')->name('permisos.rol');
    Route::get('/roles/crear','PermisosController@crearRol')->name('permisos.rol.create');
    Route::post('/roles/guardar','PermisosController@guardarRol')->name('permisos.rol.store');
    Route::get('/roles/editar/{id}','PermisosController@editarRol')->name('permisos.rol.edit');
    Route::put('/roles/actualizar/{id}','PermisosController@actualziarRol')->name('permisos.rol.update');
    Route::delete('/roles/eliminar','PermisosController@eliminarRol')->name('permisos.rol.delete');
});

