<?php

use App\Http\Controllers\users;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/', [users::class, 'index']);

Route::get('/add', [users::class, 'add']);
Route::post('/store', [users::class, 'store']);

Route::get('/edit/{id}', [users::class, 'edite']);
Route::post('/update', [users::class, 'update']);

Route::get('/delete/{id}', [users::class, 'delete']);
