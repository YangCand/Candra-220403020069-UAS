<?php
use App\Http\Controllers\KscareController;
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
    return view ('welcome');
});

//menampilkan data
Route::get('/dataRelawan', [KscareController::class, 'index']);

//menambah data
Route::get('/tambahRelawan/{nir?}', [KscareController::class, 'form']);

Route::post('/tambahRelawan', [KscareController::class, 'tambah']);

//ubah data
Route::get('/ubahRelawan/{nir?}', [KscareController::class, 'form']);

Route::post('/ubahRelawan/{nir}', [KscareController::class, 'ubah']);

//hapus data
Route::get('/hapusRelawan/{nir}', [KscareController::class, 'hapus']);