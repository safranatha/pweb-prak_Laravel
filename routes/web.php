<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;

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
// Route::get('/', function(){
//     return view('index');
// });

Route::get('/', function(){
    return view('Landing.index');
});

// Route::get('/Landing_Page', function(){
//     return view('Landing.index');
// });

Route::get('/User_Option_Page', function(){
    return view('User_Option_Page.page_antara');
});
Route::get('/Admin_Login', function(){
    return view('Login Page.Login Admin');
});
Route::get('/Staff_Login', function(){
    return view('Login Page.Login Staff');
});

Route::get('/Register_Page', function(){
    return view('Sign Up Page.Register');
});

Route::get('/Admin_Dashboard', function(){
    return view('Admin_Page.Admin_Dashboard');
});
Route::get('/Staff_Payment', function(){
    return view('Staff_Page.Staff_Payment');
});

Route::get('/Admin_Sales_Page', [PenjualanController::class, 'index']);
// Route::get('/Admin_Stock_Barang', function(){
//     return view('Admin_Page.Stock');
// });
// Route::get('/Admin_Supplier', function(){
//     return view('Admin_Page.Supplier');
// });
// Route::get('/Admin_Report', function(){
//     return view('Admin_Page.Report');
// });
// Route::get('/Admin_Account', function(){
//     return view('Admin_Page.Admin_Account');
// });
// Route::get('/Staff_Account', function(){
//     return view('Staff_Page.Staff_Account');
// });
Route::get('/Staff_Stock', function(){
    return view('Staff_Page.Staff_Stock_Page');
});

Route::get('/Admin_Stock_Barang', function(){
    return view('Admin_Page.Stock');
});
Route::get('/StockMasuk', function(){
    return view('Admin_Page.Stock_stockMasuk');
})->name('StockMasuk');
Route::get('/StockKeluar', function(){
    return view('Admin_Page.Stock_stockKeluar');
});


Route::resource('user', UserController::class);

Route::resource('penjualan', PenjualanController::class);

Route::resource('barang', BarangController::class);

Route::get('/tampilkanbarang/{id}',[BarangController::class,'show'])->name('tampilkanbarang');
Route::get('/Hapusbarang/{id}',[BarangController::class,'destroy'])->name('Hapusbarang');
Route::post('/updatebarang/{id}',[BarangController::class,'update'])->name('Updatebarang');




