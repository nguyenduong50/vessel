<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VesselController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('auth.login');
});

Auth::routes();

//Route userGuest
Route::group(['middleware' => ['auth']], function(){
    Route::get('/search', [CustomerController::class, 'search'])->name('search');
    Route::get('/search-result', [CustomerController::class, 'searchResult'])->name('searchResult');

    Route::resource('/customer', CustomerController::class)->names('customer');

    //Export file Excel
    Route::post('/export-csv', [CustomerController::class, 'export_csv']);
});

//Route Admin
Route::group(['middleware' => ['auth', 'role']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('/vessel', VesselController::class)->names('vessel');
    Route::resource('/company', CompanyController::class)->names('company');
    Route::resource('/user', UserController::class)->names('user');
});
