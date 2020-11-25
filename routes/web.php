<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administracion\CAdministracion;
use App\Http\Controllers\Productos\CProductos;

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

//raiz  
Route::get('/',[CAdministracion::class, 'index']);
Route::get('informacion',[CAdministracion::class, 'informacion']);

//Productos  
Route::get('perros',[CProductos::class, 'productoperros']);
Route::get('gatos',[CProductos::class, 'productogatos']);
