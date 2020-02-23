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

//トップページ
Route::get('/', function () {
  return view('toppage/top');
});

//登録ページ
Route::get('/regist', 'ShowapisController@regist')->name('regist');
//APIへ送信
Route::post('postpath','RegistapisController@postpath');
//DBへ登録
Route::post('/regist','RegistapisController@create')->name('dbsend');
//一覧表示ページ
Route::get('/show', 'ShowapisController@show')->name('show');

