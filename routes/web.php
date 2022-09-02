<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SocialController;

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

Route::view('/', 'welcome')->name('welcome');

//login instagram
Route::get('login/facebook',[SocialController::class,'facebookRedirect']);
Route::get('login/facebook/callback',[SocialController::class,'loginWithFacebook']);
Route::get('login/google',[SocialController::class,'googleRedirect']);
Route::get('login/google/callback',[SocialController::class,'loginWithGoogle']);

Route::middleware('auth', 'verified')->group(function () {
		// Route::view('kategori', 'kategori')->name('kategori');
	Route::view('profile', 'profile')->name('profile');
	Route::view('dashboard', 'dashboard')->name('dashboard');
	Route::view('influencershow', 'influencershow')->name('influencershow');
	Route::view('testing', 'testing')->name('testing');
	// Route::view('influencer', 'influencer')->name('influencer');
	// routenya katewgori
	Route::GET('index',[App\Http\Controllers\KategoriController::class, 'index'])->name('index');
	Route::post('store',[App\Http\Controllers\KategoriController::class, 'store'])->name('store');
	Route::GET('edit/{id}',[App\Http\Controllers\KategoriController::class, 'edit'])->name('edit');
	Route::post('update/{id}',[App\Http\Controllers\KategoriController::class, 'update'])->name('update');
	Route::GET('delete/{id}',[App\Http\Controllers\KategoriController::class, 'destroy'])->name('delete');
	// routenya berita
	Route::GET('berita/index',[App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
	Route::GET('berita/create',[App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
	Route::post('berita/store',[App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
	Route::GET('berita/edit/{id}',[App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
	Route::post('berita/update/{id}',[App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update');
	Route::GET('berita/delete/{id}',[App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.delete');
	
	// routenya influencer
	Route::GET('influencer/index',[App\Http\Controllers\InfluencerController::class, 'index'])->name('influencer.index');
	Route::GET('influencer/show',[App\Http\Controllers\InfluencerController::class, 'show'])->name('influencer.show');
	Route::GET('influencer/create',[App\Http\Controllers\InfluencerController::class, 'create'])->name('influencer.create');
	Route::GET('influencer/create',[App\Http\Controllers\InfluencerController::class, 'create'])->name('influencer.create');
	Route::post('influencer/store',[App\Http\Controllers\InfluencerController::class, 'store'])->name('influencer.store');
	Route::GET('influencer/edit/{id}',[App\Http\Controllers\InfluencerController::class, 'edit'])->name('influencer.edit');
	Route::post('influencer/update/{id}',[App\Http\Controllers\InfluencerController::class, 'update'])->name('influencer.update');
	Route::GET('influencer/delete/{id}',[App\Http\Controllers\InfluencerController::class, 'destroy'])->name('influencer.delete');



});
// Route::get('kategori',[App\Http\Controllers\KategoriController::class, 'index'])->name('index');

