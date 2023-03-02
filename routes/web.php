<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RatingController;
use App\Models\Destinasi;
use App\Models\User;
use App\Models\Ulasan;
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
    $jumlahdestinasi = Destinasi::count();
    $jumlahuser = User::count();
    // $jumlahulasan = Ulasan::count();
    // $jumlahulasan = Ulasan::count();
    return view('admin.welcomeadmin', compact('jumlahdestinasi', 'jumlahuser'));
});

Route::get('/destinasi', function () {
    return view('user.destinasi');
});

Route::get('/aboutus', function () {
    return view('user.aboutus');
});

Route::get('/contactus', function () {
    return view('user.contactus');
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

//Data Kota Relasi
Route::get('/kota',[KotaController::class, 'kota'])->name('kota');

Route::get('/tambahkota',[KotaController::class, 'tambahkota'])->name('tambahkota');
Route::post('/insertkota',[KotaController::class, 'insertkota'])->name('insertkota');

Route::get('/tampilkota/{id}',[KotaController::class, 'tampilkota'])->name('tampilkota');
Route::post('/updatekota{id}',[KotaController::class, 'updatekota'])->name('updatekota');

Route::get('/deletekota/{id}',[KotaController::class, 'deletekota'])->name('deletekota');

//Data Rating
Route::get('/rating',[RatingController::class, 'rating'])->name('rating');

Route::get('/tambahrating',[RatingController::class, 'tambahrating'])->name('tambahrating');
Route::post('/insertrating',[RatingController::class, 'insertrating'])->name('insertrating');

Route::get('/tampilrating/{id}',[RatingController::class, 'tampilrating'])->name('tampilrating');
Route::post('/updaterating{id}',[RatingController::class, 'updaterating'])->name('updaterating');

Route::get('/deleterating/{id}',[RatingController::class, 'deleterating'])->name('deleterating');

//Login Admin
Route::get('/loginadmin',[LoginController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmindua',[LoginController::class, 'loginadmindua'])->name('loginadmindua');

Route::get('/registeradmin',[LoginController::class, 'registeradmin'])->name('registeradmin');
Route::post('/registeradmindua',[LoginController::class, 'registeradmindua'])->name('registeradmindua');

Route::get('/logoutadmin',[LoginController::class, 'logoutadmin'])->name('logoutadmin');
//Akhir login admin


