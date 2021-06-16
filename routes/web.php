<?php
use App\Http\Controllers\InfokampusController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/masuk', function () {
    return view('pages.auth.login');
});

// Route::get('/informasi-kampus', function () {
//     return view('informasikampus');
// });

Route::get('/informasi-kampus', [App\Http\Controllers\LandingpageController::class, 'informasikampus'])->name('informasikampus');
Route::get('/informasi-kampus/{id}/', [App\Http\Controllers\LandingpageController::class, 'informasikampusspesifik'])->name('informasikampusspesifik');


Route::get('/informasi-jurusan', [App\Http\Controllers\LandingpageController::class, 'informasijurusan'])->name('informasijurusan');
Route::get('/informasi-jurusan/{id}', [App\Http\Controllers\LandingpageController::class, 'informasijurusanspesifik'])->name('informasijurusanspesifik');

Route::get('/artikel-blog', [App\Http\Controllers\LandingpageController::class, 'artikelblog'])->name('artikelblog');
Route::get('/artikel-blog/{id}', [App\Http\Controllers\LandingpageController::class, 'artikelblogspesifik'])->name('artikelblogspesifik');

Route::get('/artikel-beasiswa-magang', [App\Http\Controllers\LandingpageController::class, 'artikelbeasiswamagang'])->name('artikelbeasiswamagang');
Route::get('/artikel-beasiswa-magang/{id}', [App\Http\Controllers\LandingpageController::class, 'artikelbeasiswamagangspesifik'])->name('artikelbeasiswamagangspesifik');



Route::get('/', [App\Http\Controllers\LandingpageController::class, 'landing'])->name('landing');

Route::get('auth/google',[\App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle'])->name('google.login');

Route::get('auth/google/callback',[\App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback'])->name('google.callback');
Route::resource('/tanggapan', App\Http\Controllers\TanggapanController::class);
Auth::routes();


Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\LandingpageController::class, 'landing'])->name('landing');
// Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('user.index');
Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/infokampus', [\App\Http\Controllers\HomeController::class, 'infokampus'])->name('infokampus');
Route::get('/forminfokampus', [\App\Http\Controllers\HomeController::class, 'forminfokampus'])->name('forminfokampus')->middleware('is_admin');

Route::resource('admin/infokampus', App\Http\Controllers\InfokampusController::class)->middleware('is_admin');
Route::resource('admin/artikelinfojurusan', App\Http\Controllers\ArtikelinfojurusanController::class)->middleware('is_admin');
Route::resource('admin/artikelblog', App\Http\Controllers\ArtikelblogController::class)->middleware('is_admin');
Route::resource('admin/artikelbeasiswamagang', App\Http\Controllers\ArtikelbeasiswamagangController::class)->middleware('is_admin');

