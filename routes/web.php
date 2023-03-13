<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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
    return view('index');
})->name('index');
/*
Route::resource('/admin', function(){
    if (Auth::check() && Auth::user()->rol == "admin") {
        AdminController
    }else {
        return Redirect::route('index');
    }
});
*/
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');


Route::resource('/admin', AdminController::class)->middleware('rol:admin');


Route::prefix('products')->group(function () {
    Route::get('index', [ProductController::class, 'index']);
    Route::get('store', [ProductController::class, 'store']);
    Route::get('edit', [ProductController::class, 'edit']);
    Route::get('destroy', [ProductController::class, 'destroy']);
});

Route::get('/errors', function () {
    return view('errors.401');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

