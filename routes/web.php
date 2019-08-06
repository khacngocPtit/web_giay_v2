<?php

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
    return view('master-layout');
});


Route::get('/codong', function () {
    return view('codong');
});

Route::get('/danhsachsanpham', function () {
    return view('danhsachsanpham');
});

Route::get('/gioithieu', function () {
    return view('gioithieu');
});

Route::get('/tintuc-noibo', function () {
    return view('tintuc-noibo');
});
Route::get('/tintuc-trongnghanh', function () {
    return view('tintuc-trongnghanh');
});
Route::get('/tintuc', function () {
    return view('tintuc');
});

Route::get('/tuyendung', function () {
    return view('tuyendung');
});

Route::get('/chitiet-sanpham', function () {
    return view('chitiet-sanpham');
});
