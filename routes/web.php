<?php

use Illuminate\Support\Facades\Route;



//Home Booking Customer List  Admin
Route::get('/','App\Http\Controllers\homeController@home')->name('home');
Route::post('/booking','App\Http\Controllers\homeController@booking')->name('booking');
Route::get('/login','App\Http\Controllers\homeController@login')->name('login');
Route::get('/admin','App\Http\Controllers\homeController@admin')->name('admin');
Route::post('/admincheck','App\Http\Controllers\homeController@admincheck')->name('admincheck');
Route::get('/clist','App\Http\Controllers\homeController@clist')->name('clist');
Route::get('/customerDelete/{id}','App\Http\Controllers\homeController@customerDelete')->name('customerDelete');

//Team Creat
Route::get('/team','App\Http\Controllers\homeController@team')->name('team');
Route::post('/teamCreate','App\Http\Controllers\homeController@teamCreate')->name('teamCreate');
Route::get('/tCreate','App\Http\Controllers\homeController@tCreate')->name('tCreate');
Route::get('/teamDelete/{id}','App\Http\Controllers\homeController@teamDelete')->name('teamDelete');

//Testimonial Create
Route::get('/testimonial','App\Http\Controllers\homeController@testimonial')->name('testimonial');
Route::post('/reviewCreate','App\Http\Controllers\homeController@reviewCreate')->name('reviewCreate');
Route::get('/rCreate','App\Http\Controllers\homeController@rCreate')->name('rCreate');
Route::get('/reviewDelete/{id}','App\Http\Controllers\homeController@reviewDelete')->name('reviewDelete');


