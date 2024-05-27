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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "login"
    ]);
});


Route::get('/loginperusahaan', function () {
    return view('loginperusahaan', [
        "title" => "loginperusahaan"
    ]);
});

Route::get('/HomePagePerusahaan', function () {
    return view('HomePagePerusahaan', [
        "title" => "HomePagePerusahaan"
    ]);
});

Route::get('/LihatPerusahaan', function () {
    return view('LihatPerusahaan', [
        "title" => "LihatPerusahaan"
    ]);
});

Route::get('/LihatPerusahaan2', function () {
    return view('LihatPerusahaan2', [
        "title" => "LihatPerusahaan2"
    ]);
});

Route::get('/DetailPerusahaan', function () {
    return view('DetailPerusahaan', [
        "title" => "DetailPerusahaan"
    ]);
});

Route::get('/Kehidupan&Budaya', function () {
    return view('Kehidupan&Budaya', [
        "title" => "Kehidupan&Budaya"
    ]);
});

Route::get('/Pekerjaan', function () {
    return view('Pekerjaan', [
        "title" => "Pekerjaan"
    ]);
});

Route::get('/DetailPekerjaan', function () {
    return view('DetailPekerjaan', [
        "title" => "DetailPekerjaan"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "register"
    ]);
});

Route::get('/registerperusahaan', function () {
    return view('registerperusahaan', [
        "title" => "registerperusahaan"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});

Route::get('/about2', function () {
    return view('about2', [
        "title" => "about2"
    ]);
});


Route::get('/aboutperusahaan', function () {
    return view('aboutperusahaan', [
        "title" => "aboutperusahaan"
    ]);
});

Route::get('/lowongankerja', function () {
    return view('lowongankerja', [
        "title" => "lowongankerja"
    ]);
});

Route::get('/lowongankerja2', function () {
    return view('lowongankerja2', [
        "title" => "lowongankerja2"
    ]);
});

Route::get('/detailblog', function () {
    return view('detailblog', [
        "title" => "detailblog"
    ]);
});

Route::get('/detailblog2', function () {
    return view('detailblog2', [
        "title" => "detailblog2"
    ]);
});

Route::get('/ProfillPelamar', function () {
    return view('ProfillPelamar', [
        "title" => "ProfillPelamar"
    ]);
});

Route::get('/ProfillPerusahaan', function () {
    return view('ProfillPerusahaan', [
        "title" => "ProfillPerusahaan"
    ]);
});

Route::get('/StatusPelamar', function () {
    return view('StatusPelamar', [
        "title" => "StatusPelamar"
    ]);
});


Route::get('/PopUpStatus', function () {
    return view('PopUpStatus', [
        "title" => "PopUpStatus"
    ]);
});

Route::get('/BuatLowongan', function () {
    return view('BuatLowongan', [
        "title" => "BuatLowongan"
    ]);
});

Route::get('/BuatLowongan2', function () {
    return view('BuatLowongan2', [
        "title" => "BuatLowongan2"
    ]);
});

Route::get('/BuatLowongan3', function () {
    return view('BuatLowongan3', [
        "title" => "BuatLowongan3"
    ]);
});

Route::get('/LowonganDisimpan', function () {
    return view('LowonganDisimpan', [
        "title" => "LowonganDisimpan"
    ]);
});

Route::get('/disimpan', function () {
    return view('disimpan', [
        "title" => "disimpan"
    ]);
});

Route::get('/unggahlowongan', function () {
    return view('unggahlowongan', [
        "title" => "unggahlowongan"
    ]);
});

/* Home Page Pelamar */
Route::get('/HomePagePelamar', function () {
    return view('HomePagePelamar', [
        "title" => "HomePagePelamar"
    ]);
});


Route::get('/Kontak', function () {
    return view('Kontak', [
        "title" => "Kontak"
    ]);
});