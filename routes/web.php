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

Route::get('/DetailPerusahaan', function () {
    return view('DetailPerusahaan', [
        "title" => "DetailPerusahaan"
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

Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});

Route::get('/lowongankerja', function () {
    return view('lowongankerja', [
        "title" => "lowongankerja"
    ]);
});

Route::get('/detailblog', function () {
    return view('detailblog', [
        "title" => "detailblog"
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

/* Home Page Pelamar */
Route::get('/HomePagePelamar', function () {
    return view('HomePagePelamar', [
        "title" => "HomePagePelamar"
    ]);
});