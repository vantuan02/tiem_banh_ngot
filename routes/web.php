<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('index', [
//     'as'=>'trang-chu',
//     'users'=>'PageController@getIndex'
// ]);

// Route::get('/', function () {
//     return view('page.trangchu');
// });

Route::get('auth/register', [RegisterController::class, 'index'])->name('register');
Route::post('auth/register', [RegisterController::class, 'register'])->name('dang-ki');

Route::get('auth/login', [LoginController::class, 'index'])->name('login');
Route::post('auth/login', [LoginController::class, 'login'])->name('dang-nhap');
Route::get('auth/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('auth/log', [AdminController::class, 'log'])->name('log');
Route::get('auth/signout', [AdminController::class, 'signout'])->name('signout');

//Client
Route::get('/', [PageController::class, 'getIndex'])->name('trang-chu');
Route::get('/category/{type}', [PageController::class, 'getLoaiSp'])->name('loai-san-pham');
Route::get('/gioithieu', [PageController::class, 'gioithieu'])->name('gioi-thieu');
Route::get('/detail/{id}', [PageController::class, 'getChiTiet'])->name('chi-tiet');
Route::get('/addtocart/{id}', [PageController::class, 'getAddtoCart'])->name('them-vao-gio-hang');

//Admin
Route::post('auth/log', [AdminController::class, 'logAdmin'])->name('logadmin');

Route::prefix('adminid')->middleware('admin')->group(function () {
    Route::get('/ad', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/list', [AdminController::class, 'listSP'])->name('admin.listSP');
    Route::get('/products/create', [AdminController::class, 'createSP'])->name('products.create');
    Route::post('/products/store', [AdminController::class, 'storeSP'])->name('products.store');
    Route::delete('/products/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/{id}/edit', [AdminController::class, 'editSP'])->name('products.edit');
    Route::put('/products/{id}/update', [AdminController::class, 'updateSP'])->name('products.update');

    Route::get('/banner', [AdminController::class, 'getBanner'])->name('admin.banner');
    Route::get('/banner/create', [AdminController::class, 'createSL'])->name('banner.create');
    Route::post('/banner/store', [AdminController::class, 'storeSL'])->name('banner.store');
});













