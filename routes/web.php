<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\NewsController;

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

// Route::view('/', 'welcome')->name('welcome');


//login instagram
Route::view('beritas', 'beritas/index')->name('index');

Route::get('login/facebook',[SocialController::class,'facebookRedirect']);
Route::get('login/facebook/callback',[SocialController::class,'loginWithFacebook']);
Route::get('login/google',[SocialController::class,'googleRedirect']);
Route::get('login/google/callback',[SocialController::class,'loginWithGoogle']);

Route::GET('/',[App\Http\Controllers\NewsController::class, 'index'])->name('welcome');
// Route::view('indexinflu', 'indexinflu')->name('indexinflu');
Route::GET('influencer/index',[App\Http\Controllers\InfluencerController::class, 'index'])->name('influencer.index');
Route::GET('influencer/show',[App\Http\Controllers\InfluencerController::class, 'show'])->name('influencer.show')->middleware('Role:user');
Route::GET('influencer/create',[App\Http\Controllers\InfluencerController::class, 'create'])->name('influencer.create')->middleware('Role:user');
Route::post('influencer/store',[App\Http\Controllers\InfluencerController::class, 'store'])->name('influencer.store')->middleware('Role:user');
Route::GET('influencer/edit/{id}',[App\Http\Controllers\InfluencerController::class, 'edit'])->name('influencer.edit')->middleware('Role:user');
Route::post('influencer/update/{id}',[App\Http\Controllers\InfluencerController::class, 'update'])->name('influencer.update')->middleware('Role:user');
Route::GET('influencer/delete/{id}',[App\Http\Controllers\InfluencerController::class, 'destroy'])->name('influencer.delete')->middleware('Role:user');

// Route::middleware('Role:admin')->group(function () {
	// Route::view('kategori', 'kategori')->name('kategori');
	Route::view('profile', 'profile')->name('profile')->middleware('Role:admin');
	Route::view('dashboard', 'dashboard')->name('dashboard')->middleware('Role:admin');
	// Route::view('testing', 'testing')->name('testing');
	// Route::view('influencer', 'influencer')->name('influencer');
	// routenya katewgori
	Route::GET('index',[App\Http\Controllers\KategoriController::class, 'index'])->name('index')->middleware('Role:admin');
	Route::post('store',[App\Http\Controllers\KategoriController::class, 'store'])->name('store')->middleware('Role:admin');
	Route::GET('edit/{id}',[App\Http\Controllers\KategoriController::class, 'edit'])->name('edit')->middleware('Role:admin');
	Route::post('update/{id}',[App\Http\Controllers\KategoriController::class, 'update'])->name('update')->middleware('Role:admin');
	Route::GET('delete/{id}',[App\Http\Controllers\KategoriController::class, 'destroy'])->name('delete')->middleware('Role:admin');
	// routenya berita
	Route::GET('berita/index',[App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index')->middleware('Role:admin');
	Route::GET('berita/create',[App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create')->middleware('Role:admin');
	Route::post('berita/store',[App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store')->middleware('Role:admin');
	Route::GET('berita/edit/{id}',[App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit')->middleware('Role:admin');
	Route::post('berita/update/{id}',[App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update')->middleware('Role:admin');
	Route::GET('berita/delete/{id}',[App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.delete')->middleware('Role:admin');
	
	// routenya influencer


// });
// Route::get('kategori',[App\Http\Controllers\KategoriController::class, 'index'])->name('index');

