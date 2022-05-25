<?php
use App\Http\Controllers\FilmsController;
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
    return view('welcome');
});

Route::get('crudfilm',[FilmsController::class,'getall']);





Route::post('/add', [FilmsController::class,'add']);
Route::get('/add', [FilmsController::class,'add']);