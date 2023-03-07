<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\RatingController;
use App\Models\Destinasi;
use App\Models\Kota;
use App\Models\User;
use App\Models\Ulasan;
use App\Models\Destinasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KontakController;

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

Route::get('/u', function () {
    return view('user.welcomeuser');
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

Route::get('kontak', [kontakController::class, 'index3'])->name('kontak');
Route::post('/insertkontak', [KontakController::class, 'insertkontak'])->name('insertkontak');

Route::get('/hubungi', function () {
    return view('user.hubungi');
});

Route::get('/profile', function () {
    return view('user.profile');
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

//Data Komentar
Route::get('/komentar',[KomentarController::class, 'komentar'])->name('komentar');

Route::get('/tambahkomentar',[KomentarController::class, 'tambahkomentar'])->name('tambahkomentar');
Route::post('/insertkomentar',[KomentarController::class, 'insertkomentar'])->name('insertkomentar');

Route::get('/tampilkomentar/{id}',[KomentarController::class, 'tampilkomentar'])->name('tampilkomentar');
Route::post('/updatekomentar{id}',[KomentarController::class, 'updatekomentar'])->name('updatekomentar');

Route::get('/deletekomentar/{id}',[KomentarController::class, 'deletekomentar'])->name('deletekomentar');

//Login Admin
Route::get('/loginadmin',[LoginController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmindua',[LoginController::class, 'loginadmindua'])->name('loginadmindua');

Route::get('/logoutadmin',[LoginController::class, 'logoutadmin'])->name('logoutadmin');
//Akhir login admin

//Login User
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginuserdua',[LoginController::class, 'loginuserdua'])->name('loginuserdua');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('nama_kota/search',[KotaController::class,'search']);

Route::get('nama_kota/search',[HomeController::class,'search']);

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logoutuser',[LoginController::class, 'logoutuser'])->name('logoutuser');
//Akhir login user


//komentar wisata
Route::get('/anyer',[KomenController::class, 'komen'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');
