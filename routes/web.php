<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminn', function () {
    return view('admin.welcomeadmin');
})->middleware('auth');

Route::get('/destinasi', function () {
    return view('user.destinasi');
});

Route::get('/aboutus', function () {
    return view('user.aboutus');
});

Route::get('/contactus', function () {
    return view('user.contactus');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/bandung', function () {
    return view('user.tujuan.bandung');
});

Route::get('/bali', function () {
    return view('user.tujuan.bali');
});

Route::get('/semarang', function () {
    return view('user.tujuan.semarang');
});

//Data User
Route::get('/pengguna',[PenggunaController::class, 'pengguna'])->name('pengguna');

Route::get('/tambahpengguna',[PenggunaController::class, 'tambahpengguna'])->name('tambahpengguna');
Route::post('/insertpengguna',[PenggunaController::class, 'insertpengguna'])->name('insertpengguna');

Route::get('/tampilpengguna/{id}',[PenggunaController::class, 'tampilpengguna'])->name('tampilpengguna');
Route::post('/updatepengguna/{id}',[PenggunaController::class, 'updatepengguna'])->name('updatepengguna');

Route::get('/deletepengguna/{id}',[PenggunaController::class, 'deletepengguna'])->name('deletepengguna');

//Data destinasi
Route::get('/datadestinasi',[DestinasiController::class, 'datadestinasi'])->name('datadestinasi');

Route::get('/tambahdestinasi',[DestinasiController::class, 'tambahdestinasi'])->name('tambahdestinasi');
Route::post('/insertdestinasi',[DestinasiController::class, 'insertdestinasi'])->name('insertdestinasi');

Route::get('/tampildestinasi/{id}',[DestinasiController::class, 'tampildestinasi'])->name('tampildestinasi');
Route::post('/updatedestinasi{id}',[DestinasiController::class, 'updatedestinasi'])->name('updatedestinasi');

Route::get('/deletedestinasi/{id}',[DestinasiController::class, 'deletedestinasi'])->name('deletedestinasi');

// //Data Ulasan
// Route::get('/ulasan',[DestinasiController::class, 'ulasan'])->name('ulasan');

// Route::get('/tambahdestinasi',[DestinasiController::class, 'tambahdestinasi'])->name('tambahdestinasi');
// Route::post('/insertdestinasi',[DestinasiController::class, 'insertdestinasi'])->name('insertdestinasi');

// Route::get('/tampildestinasi/{id}',[DestinasiController::class, 'tampildestinasi'])->name('tampildestinasi');
// Route::post('/updatedestinasi{id}',[DestinasiController::class, 'updatedestinasi'])->name('updatedestinasi');

// Route::get('/deletedestinasi/{id}',[DestinasiController::class, 'deletedestinasi'])->name('deletedestinasi');

//Login Admin
Route::get('/loginadmin',[LoginController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmindua',[LoginController::class, 'loginadmindua'])->name('loginadmindua');

Route::get('/registeradmin',[LoginController::class, 'registeradmin'])->name('registeradmin');
Route::post('/registeradmindua',[LoginController::class, 'registeradmindua'])->name('registeradmindua');

Route::get('/logoutadmin',[LoginController::class, 'logoutadmin'])->name('logoutadmin');
//Akhir login admin


