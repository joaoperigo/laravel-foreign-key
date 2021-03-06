<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\App;
use App\Http\Controllers\IndexController;

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


Route::get('/data', [IndexController::class, 'index']);
Route::get('/group', [IndexController::class, 'group']);