<?php

use App\Create;
use App\Meeting;
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


// 面談一覧画面表示（面談作成画面）
Route::get('/', 'CreatesController@index1');

// 面談作成画面
Route::get('/meeting_creates', 'Tree_pathsController@index1');

// 面談一覧画面表示
Route::get('/meetings', 'MeetingsController@index');

// 面談項目設定画面表示
Route::get('/creates', 'CreatesController@index1');

// 面談項目登録実行
Route::post('creates', 'CreatesController@store');

// 面談登録実行
Route::post('meetings', 'MeetingsController@store');

// 面談詳細表示
Route::get('meeting/{meeting}','MeetingsController@show');

// 組織設定実行
Route::post('tree_paths/update','Tree_pathsController@store');

// 組織設定画面表示
Route::get('tree_paths/{user}', 'Tree_pathsController@show');
Route::post('/tree_paths', 'Tree_pathsController@index');

// ユーザー一覧表示
Route::get('/user_lists', 'UsersController@index');
// ユーザー削除
Route::delete('/user_lists/{user}', 'UsersController@destroy');

// 上司部下設定削除
Route::delete('/tree_paths/{tree_path}', 'Tree_pathsController@destroy');

// 面談削除
Route::delete('/meetings/{meeting}', 'MeetingsController@destroy');


//ユーザー管理者編集画面表示
Route::GET('/user_edits','UsersController@edit');
//ユーザー管理者編集実行
Route::post('user_edits/update','UsersController@update');
Route::post('user_edits/update1','UsersController@update1');

Auth::routes([
    'register' => false // ユーザ登録機能をオフに切替
]);
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
     // ここにログイン後のみのルーティングを記述
     Route::get('/register', 'Auth\RegisterController@getRegister')->name('register');
     Route::post('/register', 'Auth\RegisterController@postRegister')->name('register');
 });


