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
	
	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index',  ['page' => 'home']);
})->name('home');

Route::get('about', function () {
	$info = DB::table('about')->first();
	return view('about', ['page' => 'about', 'info' => $info]);
})->name('about');

Route::get('news', 'PostController@all')->name('news.all');
Route::get('news/{slug}', 'PostController@single')->name('news.single');
Route::get('tags', 'PostController@tags')->name('news.tags');
Route::get('players', 'PlayerController@all')->name('players');


// Admin authentication routes
Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@auth')->name('auth');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	
	Route::get('/', function () {
		return view('admin.index');
	})->name('dashboard');
	
	// News
	Route::resource('news', 'PostController')->except('update');
	Route::post('news/{news}/update', 'PostController@update')->name('news.update');
	
	// About
	Route::get('about', 'AboutController@index')->name('about.admin');
	Route::post('about', 'AboutController@store')->name('about.store');
	
	// Players
	Route::resource('players', 'PlayerController');
	
});