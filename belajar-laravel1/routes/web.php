<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;



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
Route::get('/home' , function(){
return view('home');

});


//Sekolah
Route::get (' /',[SiswaController::class,'siswa']);
Route::get('/tambah', [SiswaController:: class, 'tambah']);
Route::post('/tambah/store', [SiswaController:: class, 'store']);
Route::get('/edit/{id}', [SiswaController::class, 'edit']);
Route::post('/edit/update', [SiswaController::class, 'update']);
Route::get('/hapus/{id}', [SiswaController::class, 'hapus']);
