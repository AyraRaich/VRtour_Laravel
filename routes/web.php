<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ContentVrController;
use App\Http\Controllers\PortalController;

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

//Route Admin
Route::get('register', [AdminController::class, 'register']);
Route::post('register', [AdminController::class, 'postRegister']);
Route::get('login', [AdminController::class, 'login']);
Route::post('login', [AdminController::class, 'postLogin']);
Route::get('logout', [AdminController::class, 'logout']);

Route::middleware('checkAdmin')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', [AdminController::class, 'index']);

        Route::prefix('category')->group(function(){
            Route::get('/', [CategoryController::class, 'index']);
            Route::get('create', [CategoryController::class, 'create']);
            Route::post('create', [CategoryController::class, 'insert']);
            Route::get('edit/{id}', [CategoryController::class, 'edit']);
            Route::post('edit/{id}', [CategoryController::class, 'update']);
            Route::get('delete/{id}', [CategoryController::class, 'delete']);
          });

          Route::prefix('wisata')->group(function(){
            Route::get('/', [WisataController::class, 'index']);
            Route::get('create', [WisataController::class, 'create']);
            Route::post('create', [WisataController::class, 'insert']);
            Route::get('edit/{id}', [WisataController::class, 'edit']);
            Route::post('edit/{id}', [WisataController::class, 'update']);
            Route::get('delete/{id}', [WisataController::class, 'delete']);
          });

          Route::prefix('contentvr')->group(function(){
            Route::get('/', [ContentVrController::class, 'index']);
            Route::get('delete/{id}', [ContentVrController::class, 'delete']);
          });

      });
    });
      Route::get('/', [PortalController::class, 'index']);
        //Route::get('about', [PortalController::class, 'about']);
        //Route::get('contact', [PortalController::class, 'contact']);
        Route::get('/wisata/{id}', [PortalController::class, 'wisata']);
        Route::get('/contentVr/{id}', [PortalController::class, 'contentvr']);
        Route::get('/category/{id}', [PortalController::class, 'category']);
        //Route::get('search', [PortalController::class, 'search']);
        //Route::prefix('comment')->group(function(){
    //  Route::post('/', [PortalController::class, 'insert']);
  //});
