<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RatingController;
use App\Models\Destinasi;
use App\Models\Kota;
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
    $jumlahkota = Kota::count();
    // $jumlahulasan = Ulasan::count();
    // $jumlahulasan = Ulasan::count();
    return view('admin.welcomeadmin', compact('jumlahdestinasi', 'jumlahuser', 'jumlahkota'));
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

Route::get('/hubungi', function () {
    return view('user.hubungi');
});

Route::get('/login', function () {
    return view('user.login');
});

//kota

Route::get('/bandung', function () {
    return view('user.kota.bandung');
});

Route::get('/bali', function () {
    return view('user.kota.bali');
});

Route::get('/semarang', function () {
    return view('user.kota.semarang');
});

Route::get('/surabaya', function () {
    return view('user.kota.surabaya');
});

Route::get('/banten', function () {
    return view('user.kota.banten');
});

Route::get('/batu', function () {
    return view('user.kota.batu');
});

//wisata
Route::get('/kawah', function () {
    return view('user.wisata.kawah');
});

Route::get('/lembang', function () {
    return view('user.wisata.lembang');
});

Route::get('/lawang', function () {
    return view('user.wisata.lawang');
});

Route::get('/ayana', function () {
    return view('user.wisata.ayana');
});

Route::get('/peuncang', function () {
    return view('user.wisata.peuncang');
});

Route::get('/kya', function () {
    return view('user.wisata.kya');
});

Route::get('/tanahlot', function () {
    return view('user.wisata.tanahlot');
});

Route::get('/jatim', function () {
    return view('user.wisata.jatim');
});

Route::get('/santerra', function () {
    return view('user.wisata.santerra');
});

Route::get('/anyer', function () {
    return view('user.wisata.anyer');
});

Route::get('/museumangkut', function () {
    return view('user.wisata.museumangkut');
});

Route::get('/pandawa', function () {
    return view('user.wisata.pandawa');
});

Route::get('/panglipuran', function () {
    return view('user.wisata.panglipuran');
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


