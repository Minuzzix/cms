<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use Illuminate\Routing\RouteRegistrar;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin', 'admin.index');
Route::prefix('admin')->group(function() {
    Route::get('/categories/restore', [CategoryController::class,'restore'])->name('categories.restore');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/departments', DepartmentController::class);
    Route::resource('/roles', RoleController::class);
});
