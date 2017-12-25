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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('/bet', function () {
    return view('bet');
});
Route::get('/listbet', function () {
    return view('listbet');
});
Route::get('/listbet/backListBet', function () {
    return view('listbet/backListBet');
});
Route::get('/listbet/listYeeGee', function () {
    return view('listbet/listYeeGee');
});
Route::get('/listbet/backListYeeGee', function () {
    return view('listbet/backListYeeGee');
});
Route::get('/listbet/reportBet', function () {
    return view('listbet/reportBet');
});