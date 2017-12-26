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

Route::get('/awards', function () {
    return view('awards');
});
Route::get('/awards/lottoType', function () {
    return view('/awards/lottoType');
});

Route::get('/depositWithdraw', function () {
    return view('/depositWithdraw');
});
Route::get('/depositWithdraw/backDeWith', function () {
    return view('/depositWithdraw/backDeWith');
});

Route::get('/reportCredit', function () {
    return view('/reportCredit');
});
Route::get('/reportCredit/backCredit', function () {
    return view('/reportCredit/backCredit');
});

Route::get('/introduce', function () {
    return view('/introduce');
});
Route::get('/introduce/member', function () {
    return view('/introduce/member');
});
Route::get('/introduce/income', function () {
    return view('/introduce/income');
});
Route::get('/introduce/withdrawIncome', function () {
    return view('/introduce/withdrawIncome');
});
Route::get('/introduce/calender/october', function () {
    return view('/introduce/calender/october');
});
Route::get('/introduce/calender/november', function () {
    return view('/introduce/calender/november');
});

Route::get('/groupNumber', function () {
    return view('/groupNumber');
});


