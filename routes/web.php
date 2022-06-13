<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin/login', 'Admin\PageController@login');
Route::post('admin/login', 'Admin\UserController@login');
Route::post('pesan', 'Admin\PesanController@store');
Route::prefix('admin')->middleware(['middleware' => 'login'])->group(function () {
    Route::get('/', 'Admin\PageController@index');
    Route::get('profil', 'Admin\ProfilController@index');
    Route::post('profil', 'Admin\ProfilController@update');
    // Route::get('logout', 'Admin\UserController@logout');
    Route::resource('berita', 'Admin\BeritaController');
    Route::resource('pesan', 'Admin\PesanController');
    Route::get('pesan/check/{id}', 'Admin\PesanController@check');
    Route::resource('slider', 'Admin\SliderController');
    Route::resource('gallery', 'Admin\GalleryController');
    Route::resource('pelanggan', 'Admin\PelangganKamiController');
    Route::prefix('about')->group(function () {
        Route::resource('jumlah-truck', 'Admin\TrukController');
        Route::resource('jenis-truck', 'Admin\JenisTrukController');
    });
    Route::prefix('pesan')->group(function () {
        Route::get('/', 'Admin\PesanController@index');
        Route::get('{id}', 'Admin\PesanController@show');
    });
    Route::resource('ritase', 'Admin\RitaseController');
    Route::resource('penghargaan', 'Admin\PenghargaanController');
    Route::resource('user', 'Admin\PengaturanUserController');
});

Route::get('logout', 'Admin\UserController@logout');

Route::prefix('hrd')->middleware(['middleware' => 'login.hrd'])->group(function () {
    Route::get('/', 'HRD\PageController@dashboard')->name('hrd.index');
    Route::resource('departemen', 'HRD\DepartemenController');
    Route::resource('sub-departemen', 'HRD\SubDepartemenController');
    Route::resource('lowongan', 'HRD\LowonganController');
    Route::resource('skill', 'HRD\SkillController');
    Route::resource('soal', 'HRD\SoalController');
    Route::resource('lamaran', 'HRD\LamaranController');
    Route::post('lamaran', 'HRD\LamaranController@index');
    Route::get('lamaran/export/excel/{id}', 'HRD\LamaranController@export');
    Route::get('lamaran/status/{id}', 'HRD\LamaranController@putStatus');
    Route::get('profil', 'HRD\ProfileController@index');
    Route::post('profil', 'HRD\ProfileController@update');
    Route::get('logout', 'Admin\UserController@logout');
    Route::get('sub-departemen-data/{id}', 'HRD\LowonganController@getSubDepartements');
    Route::any('laporan/lamaran', 'HRD\LaporanController@lamaran');
});

//about
Route::get('/', 'IndexController@index');
Route::get('about', 'AboutController@index');
Route::get('about/jumlah-truk', 'AboutController@grafikJumlahTruk');
Route::get('about/truk', 'AboutController@grafikTruk');
Route::get('about/pelanggan', 'AboutController@grafikPelanggan');
Route::get('about/merek', 'AboutController@grafikMerek');
Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@store');
//career
Route::get('career', 'CareerController@index');
Route::get('career/{id}', 'CareerController@show');
Route::get('career/lowongan/{id}', 'CareerController@indexByDepartemen');
Route::get('career/form/{id}', 'CareerController@form');
Route::post('career/form/{id}', 'CareerController@store');
Route::get('career-data', 'CareerController@getCareer');

Route::get('detail-carer', 'DetailCarerController@index');
Route::get('gallery', 'GalleryController@index');
Route::get('gallery-data', 'GalleryController@getGallery');
Route::get('service', 'ServiceController@index');
Route::get('service/ritase', 'ServiceController@ritase');
Route::get('news', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');
Route::get('form', 'FormController@index');
Route::get('soal/{id}', 'SoalController@index');
Route::get('data-soal/{id_lowongan}', 'SoalController@dataSoal');
Route::get('update-jawaban', 'SoalController@updateJawaban');
Route::get('simpan-jawaban', 'SoalController@simpanJawaban');

Route::get('/{any}', 'PageController@pageNotFound')->where('any', '^(?!api).*$');
