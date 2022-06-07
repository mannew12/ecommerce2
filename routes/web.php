<?php
use App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\productController;
use App\Http\controllers\categoryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category/register',[categoryController::class,'register'])->name('category/register');
Route::post('/category/register',[categoryController::class,'store']);
Route::get('/category/list', [categoryController::class, 'get_all'])->name('category/list');
Route::get('/category/edit/{id}', [categoryController::class, 'edit']);
Route::post('/category/update',[categoryController::class,'update'])->name('category/update')->name('category/update');
Route::get('/category/delete/{id}', [categoryController::class, 'delete']);
Route::get('/category/search/{id}', [categoryController::class, 'search'])->name('category/search');
Route::get('/product/list', [productController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [productController::class, 'edit']);
Route::post('/product/update',[productController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [productController::class, 'delete']);
Route::get('/product/search/{id}', [productController::class, 'search'])->name('product/search');
Route::get('/product/register',[productController::class,'register'])->name('product/register');
Route::post('/product/register',[productController::class,'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');












