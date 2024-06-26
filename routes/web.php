<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\InvoicesDetailsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
use Illuminate\Support\Facades\Auth;
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


// basic Bage login with laravel

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', function () {
    return view('auth.login');
})->name('login');


// Register False if you want to Active it
Auth::routes();
// Auth::routes(["register" => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/invoices', InvoicesController::class);

Route::resource('/sections', SectionsController::class);

Route::resource('/products', ProductsController::class);

Route::get('/section/{id}', [InvoicesController::class, "getproducts"]);

Route::get('/InvoicesDetails/{id}', [InvoicesDetailsController::class, "edit"]);

Route::get('/{page}', [AdminController::class, 'index'])->where('page', '.*'); // Added a where condition to prevent conflict with other routes.
