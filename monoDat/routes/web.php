<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController2;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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


Route::get('list', [ProductController::class, 'index']);
Route::get('add', [ProductController::class, 'add']);
Route::post('save', [ProductController::class, 'save']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('update', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);

//Route::get('/', [ProductController2::class, 'index']);

Route::get('/public', [ProductController2::class, 'index']);
Route::get('products', [ProductController2::class, 'getProducts']);
Route::get('register', [CustomerController::class, 'register']);
// Route::get('/login', [CustomerController::class, 'login']);
Route::get('/login2', [CustomerController::class, 'login']);
Route::post('/register-process', [CustomerController::class, 'registerProcess'])->name('register-process');
Route::post('/login-process', [CustomerController::class, 'loginProcess'])->name('login-process');


Route::get('/logout', [CustomerController::class, 'logout']);
Route::get('specs', [CustomerController::class, 'getSpecs']);

// admin
Route::get('admin', [AdminController::class, 'indexAdmin']);
Route::get('/loginAdmin', [AdminController::class, 'login']);
Route::post('/admin-register-process', [AdminController::class, 'adminregisterProcess'])->name('admin-register-process');
Route::get('editAd/{id}', [AdminController::class, 'edit']);
Route::post('/login-admin', [AdminController::class, 'loginProcess'])->name('login-admin');
Route::get('listad', [AdminController::class, 'listad']);
Route::get('deleteAd/{id}', [AdminController::class, 'delete']);
Route::get('addAd', [AdminController::class, 'add']);
Route::post('savead', [AdminController::class, 'savead']);

//customer
Route::get('cusList', [AdminController::class, 'cusList']);
Route::get('addCus', [AdminController::class, 'addCus']);
Route::post('saveCus', [AdminController::class, 'saveCus']);
Route::get('deleteCus/{id}', [AdminController::class, 'deleteCus']);
Route::get('editCus/{id}', [AdminController::class, 'editCus']);
Route::post('updateCus', [AdminController::class, 'updateCus']);

//producer
Route::get('list-producers', [AdminController::class, 'producersAdmin']);
Route::get('addPro', [AdminController::class, 'addPro']);
Route::post('savePro', [AdminController::class, 'savePro']);
Route::get('deletePro/{id}', [AdminController::class, 'deletePro']);
Route::get('editPro/{id}', [AdminController::class, 'editPro']);
Route::post('updatePro', [AdminController::class, 'updatePro']);
//----------

