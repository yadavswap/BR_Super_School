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
Route::get('/comittee', function () {
    return view('comittee');
});
Route::get('/achievements', function () {
    return view('achievements');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/catelogues', function () {
    return view('catelogues');
});

Route::get('/events', function () {
    return view('events');
});
Route::get('/staff', function () {
    return view('staff');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/initiatives', function () {
    return view('initiatives');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/onlinebooks', function () {
    return view('onlinebooks');
});
Route::get('/periodicals', function () {
    return view('periodicals');
});
Route::get('/alumini', function () {
    return view('alumini');
});

