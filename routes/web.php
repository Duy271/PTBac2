<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhuongTrinhBac2Controller;

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

Route::get('/',[PhuongTrinhBac2Controller::class,'index']);
Route::post('/giai', [PhuongTrinhBac2Controller::class, 'giai']);
