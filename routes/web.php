<?php
//import controller
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaskapaiController;
use App\Http\Controllers\PesawatController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\user1Controller;
use App\Http\Controllers\BobotNilaiController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\NilaiKualitasController;
use App\Http\Controllers\NilaiHargaController;
use App\Http\Controllers\NilaiPelayananController;
use App\Http\Controllers\NilaiFasilitasController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PerangkinganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//membuat routes
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('maskapai', MaskapaiController::class);

Route::resource('pesawat', PesawatController::class);

Route::resource('tiket', TiketController::class);

Route::resource('admin', AdminController::class);

Route::resource('user1', user1Controller::class);

Route::resource('bobotnilai', BobotNilaiController::class);

Route::resource('nilaikualitas', NilaiKualitasController::class);

Route::resource('nilaiharga', NilaiHargaController::class);

Route::resource('nilaipelayanan', NilaiPelayananController::class);

Route::resource('nilaifasilitas', NilaiFasilitasController::class);

Route::resource('penilaian', PenilaianController::class);

Route::resource('perangkingan', PerangkinganController::class);


Route::get('/metode', [MetodeController::class, 'index']);
Route::get('/hitung', [MetodeController::class, 'proses_hitung']);
Route::get('/reset', [MetodeController::class, 'reset']);
Route::get('/Perangkingan', [MetodeController::class, 'index']);

Route::get('print-maskapai',[ MaskapaiController::class, 'print']);

Route::get('print-pesawat',[PesawatController::class, 'print']);
Route::get('print-tiket',[TiketController::class, 'print']);
Route::get('print-admin',[AdminController::class, 'print']);
Route::get('print-user1',[user1Controller::class, 'print']);
Route::get('print-bobotnilai',[BobotNilaiController::class, 'print']);
Route::get('print-nilaifasilitas',[NilaiFasilitasController::class, 'print']);
Route::get('print-nilaiharga',[NilaiHargaController::class, 'print']);
Route::get('print-nilaipelayanan',[NilaiPelayananController::class, 'print']);
Route::get('print-nilaikualitas',[NilaiKualitasController::class, 'print']);
