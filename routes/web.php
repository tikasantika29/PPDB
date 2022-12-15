<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Termwind\render;

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
    return view('beranda');
});

Route::get('search', 'App\Http\Controllers\PatientController@view_patient');
Route::get('findCustomers', 'App\Http\Controllers\PatientController@getCustomer');
// Route::get('welcome', 'App\Http\Controllers\BerandaController@beranda');
Route::get('beranda', 'App\Http\Controllers\BerandaController@beranda');
Route::get('dashboard_siswa','App\Http\Controllers\SiswaController@dashboard_siswa');
Route::get('jalur','App\Http\Controllers\SiswaController@jalur');
Route::get('cari','App\Http\Controllers\SiswaController@cari');
Route::get('zonasi/','App\Http\Controllers\SiswaController@zonasi');
Route::get('afirmasi','App\Http\Controllers\SiswaController@afirmasi');
Route::get('prestasi','App\Http\Controllers\SiswaController@prestasi');
Route::get('kepindahan','App\Http\Controllers\SiswaController@kepindahan');
Route::get('test','App\Http\Controllers\SiswaController@test');
Route::get('jalur2','App\Http\Controllers\SiswaController@jalur2');
Route::get('add_zonasi','App\Http\Controllers\SiswaController@add_zonasi');
Route::get('siswa','App\Http\Controllers\SiswaController@siswa');
Route::get('siswa/add','App\Http\Controllers\SiswaController@add');
Route::post('siswa','App\Http\Controllers\SiswaController@addProcess');
Route::get('siswa/ambil/{id_siswa}','App\Http\Controllers\SiswaController@ambil');
Route::patch('siswa/{id}','App\Http\Controllers\SiswaController@editProcess');
Route::get('data_siswa','App\Http\Controllers\SiswaController@data');
Route::get('edit_siswa2/{id_siswa}','App\Http\Controllers\SiswaController@edit');
Route::get('edit_siswa/{id_siswa}','App\Http\Controllers\SiswaController@edit');
Route::put('update_siswa/{id_siswa}','App\Http\Controllers\SiswaController@update');

// Route::view('/register2', 'register2')->name('register2');
// Route::view('/registration-success','registration-success')->name('registration.success');

// Route::get('/', 'App\Http\Controllers\Select2Controller@index');
// Route::post('/cari', 'App\Http\Controllers\Select2Controller@loadData')->name('index.loadData');
// Route::get('search', [UserController::class, 'search']);
// Route::get('autocomplete', [UserController::class, 'autocomplete'])->name('autocomplete');

// Route::post('login', 'App\Http\Controllers\AuthController@login');
// Route::post('loginPost', 'App\Http\Controllers\UserController@loginPost');
// Route::get('register', 'App\Http\Controllers\UserController@register');
// Route::post('registerPost', 'App\Http\Controllers\UserController@registerPost');
// Route::get('admin_disdik', function () { return view('masuk'); })->middleware('checkRole:admin_disdik');
// Route::get('admin_smp', function () { return view('masuk'); })->middleware(['checkRole:admin_smp']);
// Route::get('admin_sd', function () { return view('index'); })->middleware(['checkRole:admin_sd']);
// Route::get('siswa', function () { return view('index'); })->middleware(['checkRole:siswa']);
Route::group(['middleware' => 'auth', 'verified'], function(){
    Route::get('dashboard','App\Http\Controllers\HomeController@index');
    Route::get('profil', 'App\Http\Controllers\UserController@profil');
});

route::group(['middleware' => 'admin_disdik', 'verified'], function(){
    // Route::get('admin_disdik', 'App\Http\Controllers\AdminController@masuk');
    // Route::get('siswa', 'App\Http\Controllers\SiswaController@index');
    // Route::get('admin_smp', 'App\Http\Controllers\AdminSMPController@masuk');
    // Route::get('admin_sd', 'App\Http\Controllers\AdminSDController@index');
    // Route::get('dashboard','App\Http\Controllers\AdminController@index');
    Route::get('users','App\Http\Controllers\UserController@users');
    Route::get('users/add','App\Http\Controllers\UserController@add');
    Route::post('users','App\Http\Controllers\UserController@addProcess');
    Route::patch('users/edit/{id}','App\Http\Controllers\UserController@edit');
    Route::patch('users/{id}','App\Http\Controllers\UserController@editProcess');
    Route::patch('tampil_edit','App\Http\Controllers\UserController@tampil_edit');
    Route::delete('users/{id}','App\Http\Controllers\UserController@delete');
    Route::get('count','App\Http\Controllers\UserController@index');
    Route::get('tambah_admin','App\Http\Controllers\AdminController@tambah_admin');
    Route::get('tambah_siswa','App\Http\Controllers\AdminController@tambah_siswa');
    Route::get('jadwal', 'App\Http\Controllers\AdminController@jadwal');
    Route::get('tambah_jadwal', 'App\Http\Controllers\AdminController@tambah_jadwal');
    Route::get('jumlah_pendaftar', 'App\Http\Controllers\AdminController@jumlah_pendaftar');
    Route::get('jumlah_diterima', 'App\Http\Controllers\AdminController@jumlah_diterima');
    Route::get('jumlah_ditolak', 'App\Http\Controllers\AdminController@jumlah_ditolak');
    Route::get('siswa/fin/{id_siswa}','App\Http\Controllers\SiswaController@find');
    Route::patch('siswa/{id_siswa}','App\Http\Controllers\SiswaController@findProcess');
});

route::group(['middleware' => 'admin_smp', 'verified'], function(){
    Route::get('operator', 'App\Http\Controllers\AdminSMPController@operator');
    Route::get('tambah_operator', 'App\Http\Controllers\AdminSMPController@tambah_operator');
    Route::get('pengajuan', 'App\Http\Controllers\AdminSMPController@pengajuan');
    // Route::get('profil', 'App\Http\Controllers\AdminSMPController@profil');
});

route::group(['middleware' => 'admin_sd', 'verified'], function(){
    Route::get('operator_sd', 'App\Http\Controllers\AdminSDController@operator');
    // Route::get('tambah_operator', 'App\Http\Controllers\AdminSDController@tambah_operator');
    // Route::get('profil', 'App\Http\Controllers\AdminSDController@profil');
    Route::get('zonasi2','App\Http\Controllers\AdminSDController@zonasi');
    Route::get('afirmasi2','App\Http\Controllers\AdminSDController@afirmasi');
    Route::get('prestasi2','App\Http\Controllers\AdminSDController@prestasi');
    Route::get('kepindahan2','App\Http\Controllers\AdminSDController@kepindahan');
    
});

Route::get('logout', 'App\Http\Controllers\UserController@logout');
Route::get('/logout', [AuthController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
Route::get('/session/tampil', 'SessionController@tampilkanSession');
Route::get('/session/buat', 'SessionController@buatSession');
Route::get('/session/hapus', 'SessionController@hapusSession');
// Route::get('/home', function(){
//     $value = session('key');
//     $value = session('key', 'default');
//     session(['key' => 'value']);
// }); 
Auth::routes(['verify' => true]);
require __DIR__.'/auth.php';
