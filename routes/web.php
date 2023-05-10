<?php

use App\Http\Controllers\UserController;
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
Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/', function(){
    return view('Landing.index');
});
Route::get('/User_Option_Page', function(){
    return view('User_Option_Page.page_antara');
});
Route::get('/Admin_Login', function(){
    return view('Login Page.Login Admin');
});
Route::get('/Staff_Login', function(){
    return view('Login Page.Login Staff');
});
Route::get('/Admin_Dashboard', function(){
    return view('Admin_Page.Admin_Dashboard');
});
Route::get('/Staff_Dashboard', function(){
    return view('Staff_Page.Staff_Dashboard');
});
Route::get('/Register', function(){
    return view('Sign Up Page.Register');
});
Route::get('/Landing_Page', function(){
    return view('Landing.index');
});
Route::get('/Admin_Sales_Page', function(){
    return view('Admin_Page.Sales_Page');
});
Route::get('/Admin_Stock_Barang', function(){
    return view('Admin_Page.Stock');
});
Route::get('/Admin_Supplier', function(){
    return view('Admin_Page.Supplier');
});

Route::resource('user', UserController::class);




