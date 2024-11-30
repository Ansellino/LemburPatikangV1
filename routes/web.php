<?php

use App\Http\Controllers\welcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/editprofile', 'HomeController@profile')->name('profil');
Route::post('/editedprofile', 'HomeController@editedprofile')->name('editedprofil');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/editblog/{id}', 'HomeController@editblog')->name('editblog');
Route::post('/editedblog/{id}', 'HomeController@editedblog')->name('editedblog');
Route::get('/createblog', 'HomeController@createblog')->name('createblog');
Route::post('/createdblog','HomeController@createdblog')->name('createdblog');
Route::get('/deleteblog/{id}','HomeController@deleteblog')->name('deleteblog');
Route::get('/edituser','HomeController@edituser')->name('edituser');
Route::get('/deleteduser/{id}','HomeController@deleteduser')->name('deleteduser');
Route::get('/informationpost','HomeController@informationpost')->name('informationpost');
Route::get('/informationuser/{id}','HomeController@informationuser')->name('informationuser');


Route::get('/aboutus','welcome@aboutus')->name('aboutus');
Route::get('/category/{id}','welcome@category')->name('category');
Route::get('/post/{id}','welcome@post')->name('post');
Route::get('/contactus', 'welcome@contactus')->name('contactus');
Route::get('/', 'welcome@indexshow')->name('homeshow');
Route::get('/csr','welcome@csr')->name('csr');
Route::get('/testing', 'welcome@testing')->name('testing');
