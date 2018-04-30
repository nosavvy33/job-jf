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

//Auth::routes();
    //Route::get('login', ['as' => 'login', 'uses' => 'App\Modules\Admin\Controllers\AdminUserController@loginAdminUser']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

//Form Daños
Route::get('/operaciones/danios', 'Operaciones\FormatoDaniosController@index')->name('danios');
Route::get('/operaciones/danioscerrar', 'Operaciones\FormatoDaniosController@cerrar')->name('danioscerrar');
Route::post('/operaciones/especificacion', 'Operaciones\FormatoDaniosController@especificacion');
Route::post('/operaciones/detalle', 'Operaciones\FormatoDaniosController@detalle');
Route::post('/operaciones/placa', 'Operaciones\FormatoDaniosController@placa');
Route::post('/operaciones/ruta', 'Operaciones\FormatoDaniosController@route');
Route::post('/operaciones/idoperador', 'Operaciones\FormatoDaniosController@idoperador');
Route::post('/operaciones/nombreoperador', 'Operaciones\FormatoDaniosController@nombreoperador');
Route::post('/operaciones/registro', 'Operaciones\FormatoDaniosController@registrar');
Route::post('/operaciones/ajax', 'Operaciones\FormatoDaniosController@ajax')->name('ajax');
Route::post('/operaciones/accionesd', 'Operaciones\FormatoDaniosController@accionesd');
Route::post('/operaciones/danioscierre/registrar', 'Operaciones\FormatoDaniosController@regdanioscierre');
Route::post('/operaciones/danios/registrar', 'Operaciones\FormatoDaniosController@regdanios');

//Pruebas
//Route::get('/operaciones/rnovedadop', 'Operaciones\PruebaRNovedadOpe@form');
/*Route::get('/pruebas', 'Operaciones\FormatoDaniosController@prueba')->name('prueba');
Route::post('/empleado', 'Operaciones\FormatoDaniosController@empleado')->name('empleado');
Route::post('/bus', 'Operaciones\FormatoDaniosController@bus')->name('bus');
Route::post('/servicio', 'Operaciones\FormatoDaniosController@servicio')->name('servicio');
Route::post('/provincias', 'Operaciones\FormatoDaniosController@provincias')->name('provincias');
Route::post('/distritos', 'Operaciones\FormatoDaniosController@distritos')->name('distritos');*/

//Modulo Checklist
Route::get('/operaciones/checklist', 'Operaciones\ChecklistController@index')->name('checklist');
Route::post('/operaciones/checklist/registro', 'Operaciones\ChecklistController@registrar')->name('registro');


//Modulo Operaciones Novedades
Route::get('/operaciones/novedades', 'Operaciones\NovedadesController@index')->name('novedad');
Route::get('/operaciones/novedadcierre', 'Operaciones\NovedadesController@novedadcierre')->name('novedadcierre');
Route::post('/operaciones/descbono', 'Operaciones\NovedadesController@descbono');
Route::post('/operaciones/novcierre/registrar', 'Operaciones\NovedadesController@registrar');
Route::post('/operaciones/novedad/registrar', 'Operaciones\NovedadesController@regnovedad');

//Reportes
Route::get('/operaciones/reportes/danios', 'Operaciones\ReportesController@danios')->name('reportedanios');
Route::get('/operaciones/reportes/novedad', 'Operaciones\ReportesController@novedad')->name('reportenovedad');
Route::get('/operaciones/reportes/extrab', 'Operaciones\ReportesController@extrab')->name('reporteextrab');
Route::get('/operaciones/reportes/matriz', 'Operaciones\ReportesController@matriz')->name('reportematriz');
Route::get('/operaciones/reportes/listnovedad', 'Operaciones\ReportesController@listnovedad')->name('listanovedad');
Route::get('/operaciones/reportes/listdanios', 'Operaciones\ReportesController@listdanios')->name('listdanios');


//Listados
Route::post('/ubigeo/listar','UbigeoController@listar');
Route::post('/cargo/listar','CargoController@listar');

//Logistica
Route::get('/logistica/proveedores/mantenimiento','Logistica\ProveedoresController@index');
Route::get('/logistica/proveedores/mantenimiento/nuevo','Logistica\ProveedoresController@nuevo');
Route::post('/logistica/proveedores/mantenimiento/guardar','Logistica\ProveedoresController@guardar');
Route::get('/logistica/proveedores/mantenimiento/mostrar/{id}','Logistica\ProveedoresController@mostrar');
Route::post('/logistica/proveedores/mantenimiento/editar','Logistica\ProveedoresController@editar');
Route::get('/logistica/proveedores/mantenimiento/eliminar/{id}','Logistica\ProveedoresController@eliminar');

