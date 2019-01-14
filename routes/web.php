<?php

use Illuminate\Http\Request;

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
    return view('frontend.home');
});

Route::get('/specification', function () {
    return view('frontend.spec');
});
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return view('backend.dashboard');
        });
        Route::resource('data_hp', 'HpController');
    });
});

Route::get('/detail', function () {
    return view('frontend.detail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('testing', function (Request $request) {
    $data = $request->all();

    return response()->json(['message' => 'Testing', 'data' => $data], 200);
})->name('testing');
