<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\GrafikController;
use App\Models\Destinasi;
use App\Models\Kota;
use App\Models\User;
use App\Models\Ulasan;
use App\Models\Wisata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\KotaDetailController;
use App\Http\Controllers\NyobaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WisataDetailController;
use App\Models\Komen;
use App\Models\WisataDetail;

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
Route::get('/adminn', function () {
    $jumlahwisata = WisataDetail::count();
    $jumlahuser = User::count();
    $jumlahkomentar = Komen::count();
    return view('admin.welcomeadmin', compact('jumlahwisata', 'jumlahuser', 'jumlahkomentar'));
});

// Route::post('/nyoba', [NyobaController::class, 'nyoba'])->name('nyoba');

Route::get('/selengkapnya/{id}', [Destinasicontroller::class, 'selengkapnya'])->name('selengkapnya');

Route::get('/', [welcomecontroller::class, 'welcome'])->name('welcome');

Route::get('/u', function () {
    return view('user.welcomeuser');
});

Route::get('/profil', function () {
    return view('profile.profil');
})->name('profil');
// Route::get('/editprofil', function () {
//     return view('profile.editprofile');
// });
Route::get('/profil', [LoginController::class, 'profil'])->name('profil');
Route::get('/editprofil', [LoginController::class, 'editprofil'])->name('editprofil');
Route::put('/updateprofil/{id}', [LoginController::class, 'updateprofil'])->name('updateprofil');


Route::get('/aboutus', function () {
    return view('user.aboutus');
});

 Route::get('/contactus', function () {
     return view('user.contactus');
 });

 //contactus
Route::get('kontak', [kontakController::class, 'index3'])->name('kontak');
Route::post('/insertkontak', [kontakController::class, 'insertkontak'])->name('insertkontak');
Route::get('kontakadmin', [kontakController::class, 'index4'])->name('kontakadmin');
Route::get('/deletekontak/{id}', [KontakController::class, 'deletekontak'])->name('deletekontak');

Route::get('peuncang', [KomenController::class, 'komenpeuncang'])->name('peuncang');

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

// Route::get('/peuncang', function () {
//     return view('user.wisata.peuncang');
// });

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

//grafik
Route::get('/grafik',[GrafikController::class,'index']);

//profil
Route::get('/statistik', function(){
    return view('user.profil2.statistik.index');
});

Route::get('/tambah', function(){
    return view('user.profil2.tambah.index');
});

Route::get('/wisata', function(){
    return view('grafik.wisata');
});

Route::get('/komentar', function(){
    return view('grafik.komentar');
});

//Data User
Route::get('/pengguna',[PenggunaController::class, 'pengguna'])->name('pengguna')->middleware('auth');

Route::get('/tambahpengguna',[PenggunaController::class, 'tambahpengguna'])->name('tambahpengguna')->middleware('auth');
Route::post('/insertpengguna',[PenggunaController::class, 'insertpengguna'])->name('insertpengguna')->middleware('auth');

Route::get('/tampilpengguna/{id}',[PenggunaController::class, 'tampilpengguna'])->name('tampilpengguna')->middleware('auth');
Route::post('/updatepengguna/{id}',[PenggunaController::class, 'updatepengguna'])->name('updatepengguna')->middleware('auth');

Route::get('/deletepengguna/{id}',[PenggunaController::class, 'deletepengguna'])->name('deletepengguna')->middleware('auth');

//Data destinasi
Route::get('/destinasi',[DestinasiController::class, 'destinasi'])->name('destinasi');

//Data Wisata detail
Route::get('/detailwisata',[WisataDetailController::class, 'detailwisata'])->name('detailwisata')->middleware('auth');

Route::get('/tambahdetailwisata',[WisataDetailController::class, 'tambahdetailwisata'])->name('tambahdetailwisata')->middleware('auth');
Route::post('/insertdetailwisata',[WisataDetailController::class, 'insertdetailwisata'])->name('insertdetailwisata')->middleware('auth');

Route::get('/tampildetailwisata/{id}',[WisataDetailController::class, 'tampildetailwisata'])->name('tampildetailwisata')->middleware('auth');
Route::post('/updatedetailwisata{id}',[WisataDetailController::class, 'updatedetailwisata'])->name('updatedetailwisata')->middleware('auth');

Route::get('/deletedetailwisata/{id}',[WisataDetailController::class, 'deletedetailwisata'])->name('deletedetailwisata')->middleware('auth');

//Data Gallery
Route::get('/galery',[GaleryController::class, 'galery'])->name('galery')->middleware('auth');

Route::get('/tambahgalery',[GaleryController::class, 'tambahgalery'])->name('tambahgalery')->middleware('auth');
Route::post('/insertgalery',[GaleryController::class, 'insertgalery'])->name('insertgalery')->middleware('auth');

Route::get('/tampilgalery/{id}',[GaleryController::class, 'tampilgalery'])->name('tampilgalery')->middleware('auth');
Route::post('/updategalery/{id}',[GaleryController::class, 'updategalery'])->name('updategalery')->middleware('auth');

Route::get('/deletegalery/{id}',[GaleryController::class, 'deletegalery'])->name('deletegalery')->middleware('auth');

// Route::get('/multidelete',[KotaController::class, 'multidelete'])->name('multidelete');

//Data Kota Detail
Route::get('/kotadetail',[KotaDetailController::class, 'kotadetail'])->name('kotadetail')->middleware('auth');

Route::get('/tambahkotadetail',[KotaDetailController::class, 'tambahkotadetail'])->name('tambahkotadetail')->middleware('auth');
Route::post('/insertkotadetail',[KotaDetailController::class, 'insertkotadetail'])->name('insertkotadetail')->middleware('auth');

Route::get('/tampilkotadetail/{id}',[KotaDetailController::class, 'tampilkotadetail'])->name('tampilkotadetail')->middleware('auth');
Route::post('/updatekotadetail{id}',[KotaDetailController::class, 'updatekotadetail'])->name('updatekotadetail')->middleware('auth');

Route::get('/deletekotadetail/{id}',[KotaDetailController::class, 'deletekotadetail'])->name('deletekotadetail')->middleware('auth');

Route::get('/multidelete',[KotaDetailController::class, 'multidelete'])->name('multidelete');

//Data Rating
Route::get('/rating',[RatingController::class, 'rating'])->name('rating')->middleware('auth');

Route::get('/tambahrating',[RatingController::class, 'tambahrating'])->name('tambahrating')->middleware('auth');
Route::post('/insertrating',[RatingController::class, 'insertrating'])->name('insertrating')->middleware('auth');

Route::get('/tampilrating/{id}',[RatingController::class, 'tampilrating'])->name('tampilrating')->middleware('auth');
Route::post('/updaterating/{id}',[RatingController::class, 'updaterating'])->name('updaterating')->middleware('auth');

Route::get('/deleterating/{id}',[RatingController::class, 'deleterating'])->name('deleterating')->middleware('auth');

 //contactus
 Route::get('kontak', [kontakController::class, 'index3'])->name('kontak')->middleware('auth');
 Route::post('/insertkontak', [kontakController::class, 'insertkontak'])->name('insertkontak');
 Route::get('kontakadmin', [kontakController::class, 'index4'])->name('kontakadmin');
 Route::get('/deletekontak/{id}', [KontakController::class, 'deletekontak'])->name('deletekontak');

//Data Komentar
Route::get('/ulasan',[KomenController::class, 'ulasan'])->name('ulasan')->middleware('auth');

Route::get('/tambahulasan',[KomenController::class, 'tambahulasan'])->name('tambahulasan')->middleware('auth');
Route::post('/insertulasan',[KomenController::class, 'insertulasan'])->name('insertulasan')->middleware('auth');

Route::get('/tampilulasan/{id}',[KomenController::class, 'tampilulasan'])->name('tampilulasan')->middleware('auth');
Route::post('/updateulasan/{id}',[KomenController::class, 'updateulasan'])->name('updateulasan')->middleware('auth');

Route::get('/deleteulasan/{id}',[KomenController::class, 'deleteulasan'])->name('deleteulasan')->middleware('auth');

//Login Admin
Route::get('/loginadmin',[LoginController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmindua',[LoginController::class, 'loginadmindua'])->name('loginadmindua');

Route::get('/logoutadmin',[LoginController::class, 'logoutadmin'])->name('logoutadmin')->middleware('auth');
//Akhir login admin

//Login User
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginuserdua',[LoginController::class, 'loginuserdua'])->name('loginuserdua');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('nama_kota/search',[KotaController::class,'search']);

Route::get('nama_kota/search',[HomeController::class,'search']);

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/lupapassword', [ForgotPasswordController::class, 'create'])->name('password.create');
Route::post('/lupapassword', [ForgotPasswordController::class, 'store'])->name('password.store');

Route::get('/mengaturulangpassword{token}', [ForgotPasswordController::class, 'reset'])->name('password.reset');
Route::post('/mengaturulangpassword', [ForgotPasswordController::class, 'rapli'])->name('password.sendreset');

Route::get('/editpassword', [ForgotPasswordController::class, 'editpw'])->name('password.store');
Route::post('/updatepassword', [ForgotPasswordController::class, 'updatepassword'])->name('password.store');

Route::get('/logoutuser',[LoginController::class, 'logoutuser'])->name('logoutuser');
//Akhir login user

//komentar wisata

//Chart
Route::get('/chartuser',[ChartController::class, 'index']);

Route::get('chartview', [ChartController::class, 'chartview'])->name('chartview');

//akhir chart
Route::get('/ayana',[KomenController::class, 'komenayana'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/jatim',[KomenController::class, 'komenjatim'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/kawah',[KomenController::class, 'komenkawah'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/kya',[KomenController::class, 'komenkya'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/lawang',[KomenController::class, 'komenlawang'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/lembang',[KomenController::class, 'komenlembang'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/museumangkut',[KomenController::class, 'komenmuseum'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/pandawa',[KomenController::class, 'komenpandawa'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/panglipuran',[KomenController::class, 'komenpanglipuran'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/peuncang',[KomenController::class, 'komenpeuncang'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/santerra',[KomenController::class, 'komensanterra'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');

Route::get('/tanahlot',[KomenController::class, 'komentanahlot'])->name('komen');
Route::post('/insertkomen',[KomenController::class, 'insertkomen'])->name('insert');


//grafik
Route::get('/grafik',[GrafikController::class,'index']);

//profil
Route::get('/statistik', function(){
    return view('user.profil2.statistik.index');
});

Route::get('tambah', function(){
    return view('user.profil2.tambah.index');
});

Route::get('wisata', function(){
    return view('grafik.wisata');
});

Route::get('komentar', function(){
    return view('grafik.komentar');
});

Route::get('/search', 'DestinasiController@search')->name('search');

Route::get('/search', 'welcomecontroller@search')->name('search');
