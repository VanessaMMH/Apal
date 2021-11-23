<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImportController;


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/reportOne', 'ReportOneController@index')->name('reportOne');
Route::put('/reportOne', 'ReportOneController@update')->name('reportOne.update');
Route::post('/reportOne/all', 'ReportOneController@all')->name('reportOne.all');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/import-ysd080', [ImportController::class, 'importYSD080View'])->name('import-ysd080');;
Route::post('/import-ysd080', [ImportController::class, 'importYSD080'])->name('import');


Route::get('/import-ysd081', [ImportController::class, 'importYSD081View'])->name('import-ysd081');;
Route::post('/import-ysd081', [ImportController::class, 'importYSD081'])->name('import');

Route::get('/import-toma-pedidos', [ImportController::class, 'importTomaPedidosView'])->name('import-toma-pedidos');;
Route::post('/import-toma-pedidos', [ImportController::class, 'importTomaPedidos'])->name('import');

Route::get('/import-clientes', [ImportController::class, 'importClientesView'])->name('import-clientes');;
Route::post('/import-clientes', [ImportController::class, 'importClientes'])->name('import');

Route::get('/tabla-ysd080', 'Ysd080Controller@index')->name('tabla-ysd080');
Route::get('/tabla-ysd081', 'Ysd081Controller@index')->name('tabla-ysd081');

Route::get('/tabla-toma-pedidos', 'TomaPedidosController@index')->name('tabla-toma-pedidos');
Route::get('/tabla-clientes', 'ClientesController@index')->name('tabla-clientes');
Route::get('/tabla-consolidado', 'JointableController@index')->name('tabla-consolidado');