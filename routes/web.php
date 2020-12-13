<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'App\Http\Controllers\data_controller@index');

// Route::get('/', 'App\Http\Controllers\data_controller@create');

Route::resource('/surverid_db', 'App\Http\Controllers\data_controller');

Route::get('/surverid_db/create' , 'App\Http\Controllers\data_controller@create');

Route::post('/surverid_db/create' , 'App\Http\Controllers\data_controller@store');

Route::get('/surverid_db/inferno/collection' , 'App\Http\Controllers\data_controller@index_collection');
