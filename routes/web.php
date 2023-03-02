<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imagecontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function() {
//     $img = Image::make('mugiwara.jpg')->resize(300, 200);
//     return $img->response('jpg');
// });

// Route::get('image', 'imagecontroller@index');
// Route::post('store', 'imagecontroller@store');

Route::get('/', [imagecontroller::class, 'index']);
Route::post('/store', [imagecontroller::class, 'store']);


