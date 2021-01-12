<?php

use App\Events\OrderProductoEvents;
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

Route::get('/test', function () {
    event(new OrderProductoEvents);
    return view('test');
});

Auth::routes();
// Route::pattern('IdPaciente', '[0-9]+');


//Rutas de cliente
//INDEX
Route::get('/', 'Cliente\HomeController@index')->name('inicio');
Route::get('/nosotros', 'Cliente\HomeController@nosotros')->name('nosotros');


Route::get('/contacto', function () {
    return view('Cliente.contacto');
})->name('contacto');

Route::get('/consulta', function () {
    return view('Cliente.consulta-integral');
})->name('consulta');


// SERVICIOS
Route::get('/servicios', 'Cliente\ServicioController@index')->name('servicios');
Route::get('/servicios/detallado/{id}', 'Cliente\ServicioController@show')->name('servicio.detallado');


//PRODUCTOS
Route::get('/productos', 'Cliente\ProductoController@index')->name('productos');
Route::get('/productos/detallado/{id}', 'Cliente\ProductoController@show')->name('productos.detallado');

//ORDEN DE COMPRA DE LADO DE CLIENTE, SOLICITUD DE COMPRA
Route::post('/productos/detallado/ordenDeCompra', 'Cliente\ProductoController@ordenDeCompra')->name('productos.ordenDeCompra');


//SOLICITUD DE CITA 
Route::post('/solicitar-cita', 'Cliente\CitaController@solicitarCita')->name('solicitarCita');
//-------------------------------Rutas de administrador-------------------------------
Route::get('/home', 'HomeController@index')->name('home');
//MI CUENTA
Route::get('/mi-cuenta', 'MiCuentaController@index')->name('miCuenta.show');
Route::put('/mi-cuenta/changePassword', 'MiCuentaController@changePassword')->name('miCuenta.changePassword');
Route::get('/mi-cuenta/editar/{IdUsuario}', 'MiCuentaController@edit')->name('miCuenta.edit');
Route::put('/mi-cuenta/update/{IdUsuario}', 'MiCuentaController@update')->name('miCuenta.update');
//CITAS
Route::group(['middleware' => ['permission:ListadoCitas|CrearCita|EditarCita|EliminarCita']], function () {
    Route::get('/citas', 'CitasController@index')->name('citas.list');
    Route::get('/citas/nueva', 'CitasController@create')->name('citas.new');
    Route::post('/citas/crear', 'CitasController@store')->name('citas.create');
    Route::post('/citas/crear-paciente', 'CitasController@storePaciente')->name('citas.createPaciente');
    Route::get('/citas/edit/{id}', 'CitasController@edit')->name('citas.edit');
    Route::put('/citas/update/{id}', 'CitasController@update')->name('citas.update');
    Route::get('/horarios', 'CitasController@horarios')->name('citas.horarios');
    Route::get('/horariosEdit', 'CitasController@horariosEdit')->name('citas.horariosEdit');
    Route::get('/citas/paciente/{id}', 'CitasController@paciente')->name('citas.paciente');
    Route::delete('/citas/delete', 'CitasController@destroy')->name('citas.delete');
    Route::get('/citas/buscarFecha', 'CitasController@buscarFecha')->name('citas.buscarFecha');
    Route::get('/citas/buscarPaciente', 'CitasController@buscarPaciente')->name('citas.buscarPaciente');
});

//SOLICITUD DE CITAS 
Route::get('/solicitud-citas/pendientes', 'SolicitudCitasController@index')->name('solicitudCita.pendientes');
Route::get('/solicitud-citas/todas', 'SolicitudCitasController@todas')->name('solicitudCita.todas');
Route::put('/solicitud-citas/cambiar-estatus', 'SolicitudCitasController@changeEstatus')->name('solicitudCita.changeEstatus');

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
    Route::get('/consulta-paciente/consulta/paciente-{IdPaciente}/consulta-{IdConsulta}', 'ConsultaController@consultaIniciada')->name('consulta.iniciada');
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
    Route::post('/usuarios/password', 'usuariosController@changePassword')->name('usuarios.changePassword');
});

// PRODUCTOS
Route::group(['middleware' => ['permission:ListadoProducto|CrearProducto|EditarProducto|EliminarProducto']], function () {
    Route::get('/listado-productos', 'ProductosController@index')->name('productos.list');
    Route::get('/productos/nuevo', 'ProductosController@create')->name('productos.create');
    Route::post('/productos/crear', 'ProductosController@store')->name('productos.store');
    Route::get('/productos/editar/{id}', 'ProductosController@edit')->name('productos.edit');
    Route::put('/productos/actualizar/{id}', 'ProductosController@update')->name('productos.update');
    Route::delete('/productos/eliminar', 'ProductosController@destroy')->name('productos.destroy');
    Route::get('/productos/buscar', 'ProductosController@buscar')->name('productos.buscar');
    Route::delete('/productos/eliminar-foto', 'ProductosController@destroyFoto')->name('productos.destroyFoto');
});

//ORDENES
Route::get('/ordenes/pendientes', 'OrdenesController@index')->name('ordenes.pendientes');
Route::get('/ordenes/todas', 'OrdenesController@getAllOrdenes')->name('ordenes.todas');
Route::put('/ordenes/cambiar-estatus', 'OrdenesController@changeEstatus')->name('ordenes.changeEstatus');

//INVENTARIO
Route::group(['middleware' => ['permission:ListadoInventario|CrearInventario|EditarInventario|EliminarInventario']], function () {
    Route::get('/inventario', 'InventarioController@index')->name('inventario.list');
    Route::put('/inventario/agregar', 'InventarioController@agregar');
    Route::put('/inventario/actualizar', 'InventarioController@update')->name('inventario.update');
    Route::delete('/inventario/vaciar', 'InventarioController@destroy')->name('inventario.destroy');
    Route::get('/inventario/buscar', 'InventarioController@buscar')->name('inventario.buscar');
});
// SERVICIOS
Route::group(['middleware' => ['permission:ListadoServicio|CrearServicio|EditarServicio|EliminarServicio']], function () {
    Route::get('/listado-servicios', 'ServicioController@index')->name('servicios.list');
    Route::get('/servicios/nuevo', 'ServicioController@create')->name('servicios.create');
    Route::post('/servicios/guardar', 'ServicioController@store')->name('servicios.store');
    Route::get('/servicios/editar/{id}', 'ServicioController@edit')->name('servicios.edit');
    Route::put('/servicios/actualizar/{id}', 'ServicioController@update')->name('servicios.update');
    Route::delete('/servicios/eliminar', 'ServicioController@destroy')->name('servicios.destroy');
    Route::get('/servicios/buscar', 'ServicioController@buscar')->name('servicios.buscar');
});

//SOBRE NOSOTROS
Route::group(['middleware' => ['permission:SobreAcumedic']], function () {
    Route::get('/sobre-nosotros', 'SobreNosotrosController@index')->name('sobreNosotros');
    Route::get('/sobre-nosotros/descripcion', 'SobreNosotrosController@descripcion')->name('sobreNosotros.descripcion');
    Route::get('/sobre-nosotros/segunda-seccion', 'SobreNosotrosController@segundaSeccion')->name('sobreNosotros.segundaSeccion');
    Route::put('/sobre-nosotros/editar-descripcion', 'SobreNosotrosController@editarDescripcion')->name('sobreNosotros.editarDescripcion');
    Route::put('/sobre-nosotros/editar-segunda-seccion', 'SobreNosotrosController@editarSegundaSeccion')->name('sobreNosotros.editarSegundaSeccion');
    Route::GET('/sobre-nosotros/datosContacto', 'SobreNosotrosController@datosContacto');
    Route::put('/sobre-nosotros/actualizarContacto', 'SobreNosotrosController@updateContacto');
    Route::post('/sobre-nosotros/serviciosSeleccionados', 'SobreNosotrosController@serviciosSeleccionados')->name('serviciosSeleccionados');
    Route::put('/sobre-nosotros/visibilidad-servicio', 'SobreNosotrosController@visibilidadServicio')->name('visibilidadServicio');
});
//=============================PERMISOS================================================================
Route::group(['middleware' => ['permission:ListarRoles|CrearRol|EditarRol|EliminarRol']], function () {
    Route::get('/roles','PermisosController@rol')->name('permisos.rol');
    Route::get('/roles/crear','PermisosController@crearRol')->name('permisos.rol.create');
    Route::post('/roles/guardar','PermisosController@guardarRol')->name('permisos.rol.store');
    Route::get('/roles/editar/{id}','PermisosController@editarRol')->name('permisos.rol.edit');
    Route::put('/roles/actualizar/{id}','PermisosController@actualziarRol')->name('permisos.rol.update');
    Route::delete('/roles/eliminar','PermisosController@eliminarRol')->name('permisos.rol.delete');
});

