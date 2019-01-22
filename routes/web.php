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

Route::get('/specification', 'FrontendController@spec')->name('front.spec');
Route::post('/specification', 'FrontendController@spec')->name('post.spec');

Route::get('/detail/{hp}', 'FrontendController@showDetail')->name('detail.hp');
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return view('backend.dashboard');
        });
        Route::resource('data_hp', 'HpController');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('testing', function (Request $request) {
    $data = $request->all();

    return response()->json(['message' => 'Testing', 'data' => $data], 200);
})->name('testing');
