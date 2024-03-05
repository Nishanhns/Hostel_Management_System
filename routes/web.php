<?php

use Illuminate\Support\Facades\Route;

Route::get('/logout', function () {
    session()->forget('username');
    session()->forget('email');
    session()->forget('role');

	session()->flash('alert','Logout Sucessfully!!!');
	return redirect ('/');
});

Route::view('/','login');
Route::post('check','App\Http\Controllers\userController@check');
Route::view('registration','registration');
Route::post('registration01','App\Http\Controllers\userController@registration01');


Route::group(['middleware'=>['App\Http\middleware\UserAuth']],function()
{
	Route::view('home','home');
	Route::view('booking','booking');
	Route::view('approve','approve');
	Route::view('hostel','hostel');
	Route::view('hostelAdd','hostelAdd');
	Route::post('hostelAdd01','App\Http\Controllers\hostelController@hostelAdd01');
	Route::get('bookingNow','App\Http\Controllers\hostelController@bookingNow');
	Route::post('bookingNow01','App\Http\Controllers\hostelController@bookingNow01');
	Route::get('hostelDel','App\Http\Controllers\hostelController@hostelDel');
	Route::get('hostelEdit','App\Http\Controllers\hostelController@hostelEdit');
	Route::post('hostelEdit01','App\Http\Controllers\hostelController@hostelEdit01');
	
});


