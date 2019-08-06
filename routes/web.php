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
    return view('pages.index');
});
Route::get('/home', function () {
    return view('pages.index');
});
Route::get('/gioithieu', function () {
    return view('pages.gioithieu');
});
Route::get('/codong', function () {
    return view('pages.codong');
});
Route::get('/lienhe', function () {
    return view('pages.lienhe');
});
Route::get('/tuyendung', function () {
    return view('pages.tuyendung');
});
Route::get('/tintuc', function () {
    return view('pages.tintuc');
});
Route::get('/tintuc-noibo', function () {
    return view('pages.tintuc-noibo');
});
Route::get('/tintuc-trongnganh', function () {
    return view('pages.tintuc-trongnganh');
});
