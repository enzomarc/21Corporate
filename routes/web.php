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
	
	use App\Post;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('news', 'PostController@all')->name('news.all');
Route::get('news/{slug}', 'PostController@single')->name('news.single');
Route::get('tags', 'PostController@tags')->name('news.tags');

// Admin authentication routes
Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@auth')->name('auth');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	
	Route::get('/', function () {
		return view('admin.index');
	})->name('dashboard');
	
	Route::resource('news', 'PostController')->except('update');
	Route::post('news/{news}/update', 'PostController@update')->name('news.update');
	
});