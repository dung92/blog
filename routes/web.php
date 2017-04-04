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
Route::get('form/dang-ky',function(){
 return view('form.dangky');
});
Route::post('form/dang-ky-thanh-vien',['as'=>'postDangKy','uses'=>'DangKyController@them']);

