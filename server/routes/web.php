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
// 最初のウェルカムページのルート
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');        #ホーム画面のpathのroute
Route::resource('posts', 'PostController');     #投稿画面のpathのroute
Route::get('/like', 'LikeController@index');     #イイネ一覧画面のpathのroute
Route::get('/github', 'LoginController@index');  #githubでのログイン画面のpathのroute

Route::get('/top','TopController@index');  #css適用確認用
Route::get('/signup','SignupController@index');  #css適用確認用  投稿画面に変更？