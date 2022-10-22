<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vistas;
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
/*
Route::get('/', function () {
    return view('Menu');
});
*/
Route::view('/', 'Menu')->name('pri');
Route::get('Vista',[Vistas::class,'vistaHome'])->name('Casa');
Route::get('Vis',[Vistas::class,'vistaIngresar'])->name('in');
Route:: post('guardarRecuerdo', [Vistas::class, 'procesarRecuerdo'])->name('SaveMem');

