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
/*route::get('test',function (){
    $usuario= new App\Models\TipoDocumento();
    $usuario-> nombre = 'NIT';
    $usuario->descripcion= 'Número de Identificación Tributaria';
    $usuario->save();
    return $usuario;
});*/

/*route::get('test',function (){
    $usuario= new App\Models\Rol();
    $usuario-> rol = 'Administrador';
    $usuario-> descripcion= '1';
    $usuario->save();
    return $usuario;
});*/

route::get('test',function () {
    $usuario = new App\Models\Usuario();
    $usuario->nombre = 'Camila';
    $usuario->apellido = 'Santamaria';
    $usuario->numero = '1001362086';
    $usuario->correo = 'camilasantamaria@gmail';
    $usuario->usuario = 'Cami';
    $usuario->password = bcrypt('1234');
    $usuario->save();
});

Route::get('/','Vistas\VistasController@index')->name('/');
Route::get('servicios','Vistas\VistasController@servicios')->name('servicios');
Route::get('productos','Vistas\VistasController@productos')->name('productos');
Route::get('contacto','Vistas\VistasController@contacto')->name('contacto');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('salir','Auth\LoginController@salir')->name('salir');

Route::get('admin','Admin\AdminController@admin')->name('admin');