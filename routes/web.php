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

Route::get('/detailblog3', function () {
    return view('detailblog3', [
        "title" => "detailblog3"
    ]);
});

Route::get('/ProfillPelamar', function () {
    return view('ProfillPelamar', [
        "title" => "ProfillPelamar"
    ]);
});

Route::get('/SimpanPerubahan', function () {
    return view('SimpanPerubahan', [
        "title" => "SimpanPerubahan"
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

Route::get('/Kontak-Perusahaan', function () {
    return view('Kontak-Perusahaan', [
        "title" => "Kontak-Perusahaan"
    ]);
});

Route::get('/LamarPekerjaan', function () {
    return view('LamarPekerjaan', [
        "title" => "LamarPekerjaan"
    ]);
});

Route::get('/LamarPekerjaan2', function () {
    return view('LamarPekerjaan2', [
        "title" => "LamarPekerjaan2"
    ]);
});

Route::get('/LamarPekerjaan3', function () {
    return view('LamarPekerjaan3', [
        "title" => "LamarPekerjaan3"
    ]);
});


Route::get('/PageValidasi', function () {
    return view('PageValidasi', [
        "title" => "PageValidasi"
    ]);
});

// Dashboard
Route::get('/PageDashboard', function () {
    return view('PageDashboard', [
        "title" => "PageDashboard"
    ]);
});

Route::get('/Page-Profill', function () {
    return view('Page-Profill', [
        "title" => "Page-Profill"
    ]);
});


Route::get('/Page-StatusPelamar', function () {
    return view('Page-StatusPelamar', [
        "title" => "Page-StatusPelamar"
    ]);
});

Route::get('/Page-StatusPelamar2', function () {
    return view('Page-StatusPelamar2', [
        "title" => "Page-StatusPelamar2"
    ]);
});

Route::get('/Page-StatusPelamar3', function () {
    return view('Page-StatusPelamar', [
        "title" => "Page-StatusPelamar"
    ]);
});

Route::get('/Page-BuatLowongan', function () {
    return view('Page-BuatLowongan', [
        "title" => "Page-BuatLowongan"
    ]);
});

Route::get('/Page-BuatLowongan2', function () {
    return view('Page-BuatLowongan2', [
        "title" => "Page-BuatLowongan2"
    ]);
});

Route::get('/Page-BuatLowongan3', function () {
    return view('Page-BuatLowongan3', [
        "title" => "Page-BuatLowongan3"
    ]);
});

Route::get('/Page-LowonganKerja', function () {
    return view('Page-LowonganKerja', [
        "title" => "Page-LowonganKerja"
    ]);
});

Route::get('/PageLogin-Dashboard', function () {
    return view('PageLogin-Dashboard', [
        "title" => "PageLogin-Dashboard"
    ]);
});

Route::get('/PageDaftar-Dashboard', function () {
    return view('PageDaftar-Dashboard', [
        "title" => "PageDaftar-Dashboard"
    ]);
});

Route::get('/PageOverlay-Dashboard', function () {
    return view('PageOverlay-Dashboard', [
        "title" => "PageOverlay-Dashboard"
    ]);
});

Route::get('/Page-SimpanProfill', function () {
    return view('Page-SimpanProfill', [
        "title" => "Page-SimpanProfill"
    ]);
});

// BARU

Route::get('/Home-Perusahaan', function () {
    return view('Home-Perusahaan', [
        "title" => "Home-Perusahaan"
    ]);
});

Route::get('/About-Perusahaan', function () {
    return view('About-Perusahaan', [
        "title" => "About-Perusahaan"
    ]);
});

Route::get('/Detail-Blog', function () {
    return view('/Detail-Blog', [
        "title" => "/Detail-Blog"
    ]);
});