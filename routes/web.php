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

// Route::get('/s

Route::get('/', function () {
    return view('main-pages.landing');
})->name('Landing');


Route::get('/qna/e-kinerja', function () {
    return view('main-pages.qna-kinerja');
})->name('QnA Kinerja');

Route::get('/qna/e-kinerja/result', function () {
    return view('main-pages.qna-kinerja-result');
})->name('QnA Kinerja Result');


Route::get('/qna/e-development', function () {
    return view('main-pages.qna-development');
})->name('QnA Development');

Route::get('/qna/e-development/result', function () {
    return view('main-pages.qna-development-result');
})->name('QnA Development Result');