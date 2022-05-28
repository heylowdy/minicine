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

Route::get('/', [FilmsController::class,'wel']);

Route::get('/crudfilm',[FilmsController::class,'getall']);





Route::post('/add', [FilmsController::class,'add']);
Route::get('/add', [FilmsController::class,'add']);


Route::get('update/{id}', [FilmsController::class,'getOne']);

Route::post('update/', [FilmsController::class,'update']);


Route::get('/showdelete/{id}', [FilmsController::class,'showdel']);   

Route::delete('/crudfilm/{id}', [FilmsController::class,'delete']);