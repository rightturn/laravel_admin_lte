<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LensController;
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
    return redirect()->route('lens.filter',['color'=>'gray']);
});

Route::resource('lens',LensController::class);

Route::get('/filter','\App\Http\Controllers\LensController@filter')->name('lens.filter');

Route::get('admin', function () {
    return view('index');
});

