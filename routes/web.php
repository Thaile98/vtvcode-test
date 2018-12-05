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
    return view('welcome');
});


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('home', function () {
    return view('frontend.home');
});

Route::get('key-word-tag', function () {
    return view('frontend.key_word_tag');
});

Route::get('lo-trinh-hoc', function () {
    return view('frontend.lo_trinh_hoc');
});
Route::get('video', function () {
    return view('frontend.video');
});
Route::get('sitemap', function () {
    return view('frontend.sitemap');
});
Route::get('search', function () {
    return view('frontend.search');
});
Route::get('download-book', function () {
    return view('frontend.download_book');
});
Route::get('post-detail-1', function () {
    return view('frontend.post_detail_1');
});
Route::get('candidate', function () {
    return view('candidate.list');
});

Route::get('news', function () {
    return view('frontend.news');
});

