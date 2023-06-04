<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\sessionController;
use App\Models\Supplier;

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

Route::get('/', function () {
    return view('Landing.index');
});

// Route::get('/Landing_Page', function(){
//     return view('Landing.index');
// });

Route::get('/User_Option_Page', function () {
    return view('User_Option_Page.page_antara');
})->name('Login_Option_Page');

Route::get('/Regist_Option_Page', function () {
    return view('User_Option_Page.Registpage_antara');
})->name('Register_Option_Page');
// Route::get('/Admin_Login', function(){
//     return view('Login Page.Login Admin');
// });
Route::get('/LoginAdmin', [sessionController::class, 'index'])->name('AdminLogin');
Route::get('/LoginStaff', [sessionController::class, 'indexStaff'])->name('StaffLogin');
Route::post('/LoginAdmin/login', [sessionController::class, 'login'])->name('LoginAuth');

Route::get('/register', [sessionController::class, 'Register'])->name('AdminRegister');
Route::post('/registerStaff', [sessionController::class, 'registeruser'])->name('StaffRegisterPost');
Route::post('/registerAdmin', [sessionController::class, 'registerAdmin'])->name('AdminRegisterPost');

Route::get('/Logout', [sessionController::class, 'logout'])->name('Logout');



Route::get('/RegisterAdminForm', function () {
    return view('Sign_Up_Page.RegisterAdmin');
})->name('adminRegist');
Route::get('/RegisterStaffForm', function () {
    return view('Sign_Up_Page.Register');
});





/* Route::route('/Adminregister', [sessionController::class, 'registeruser'])->name('AdminRegisterPost');
Route::post('/registerAdmin', [sessionController::class, 'registeruser'])->name('AdminRegisterPost'); */


Route::get('/Staff_Login', function () {
    return view('Login_Page.Login_Staff');
});

Route::get('/Register_Page', function () {
    return view('Sign_Up_Page.Register');
});



/* Route::group(['middleware' => ['auth','hakakses:admin']],function(){
    Route::get('/Admin_Dashboard', function(){
        return view('Admin_Page.Admin_Dashboard');
    });
}); */


Route::middleware(['auth', 'user-role:Staff'])->group(function () {
    Route::get('/Staff_Payment_Page', function () {
        return view('Staff_Page.Staff_Payment');
    })->name('StaffPayment');
});

Route::middleware(['auth', 'user-role:Admin'])->group(function () {
    Route::get('/Admin_Dashboard', function () {
        return view('Admin_Page.Admin_Dashboard');
    })->name('AdminDashboard');
});






//Create for table penjualan
Route::get('/Staff_Payment', function () {
    return view('Staff_Page.Staff_Payment');
});
//route penjualan
Route::get('/Admin_Sales_Page', [PenjualanController::class, 'index']);
// Route::get('/Admin_Stock_Barang', function(){
//     return view('Admin_Page.Stock');
// });
// Route::get('/Admin_Supplier', function(){
//     return view('Admin_Page.Supplier');
// });

 Route::get('/Admin_Account', function(){
     return view('Admin_Page.Admin_Account');
 });
// Route::get('/Staff_Account', function(){
//     return view('Staff_Page.Staff_Account');
// });
Route::get('/Staff_Stock', function () {
    return view('Staff_Page.Staff_Stock_Page');
});

Route::view('/Admin_Stock_Barang', 'Admin_Page.Stock')->name('AdminStockPage');
Route::view('/Admin_Account', 'Admin_Page.Admin_Account')->name('AdminAccount');
/* Route::view('/Admin_Dashboard', 'Admin_Page.Admin_Dashboard')->name('ViewAdminDashboard'); */
Route::view('/Landing_Page', 'Landing.index')->name('LandingPage');
Route::view('/Admin_Report', 'Admin_Page.Report')->name('AdminReport');
Route::view('/Admin_Stok', 'Admin_Page.Stock')->name('AdminStok');
Route::view('/StokKeluar', 'Admin_Page.Stock_stockKeluar')->name('AdminStokKeluar');



Route::view('/Staff_Stock_Page', 'Staff_Page.Staff_Stock_Page')->name('StaffStock');
// Route::view('/Staff_Payment_Page', 'Staff_Page.Staff_Payment')->name('StaffPayment');
Route::view('/Staff_Supplier_Page', 'Staff_Page.Staff_Supplier')->name('StaffSupplier');
Route::view('/Staff_Account_Page', 'Staff_Page.Staff_Account')->name('StaffAccount');





Route::get('/StockMasuk', function () {
    return view('Admin_Page.Stock_stockMasuk');
})->name('StockMasuk');
Route::get('/StockKeluar', function () {
    return view('Admin_Page.Stock_stockKeluar');
});


Route::resource('user', UserController::class);

Route::resource('penjualan', PenjualanController::class);

Route::resource('barang', BarangController::class);

Route::resource('supplier', SupplierController::class);

Route::get('/tampilkanbarang/{id}', [BarangController::class, 'show'])->name('tampilkanbarang');
Route::get('/Hapusbarang/{id}', [BarangController::class, 'destroy'])->name('Hapusbarang');
Route::post('/updatebarang/{id}', [BarangController::class, 'update'])->name('Updatebarang');


Route::get('/tampilkansupplier/{id}', [SupplierController::class, 'show'])->name('tampilkansupplier');
Route::get('/Hapussupplier/{id}', [SupplierController::class, 'destroy'])->name('Hapussupplier');
Route::post('/updatesupplier/{id}', [SupplierController::class, 'update'])->name('Updatesupplier');

Route::get('/tampilkanUser/{id}', [UserController::class, 'show'])->name('tampilkanUser');
Route::get('/HapusUser/{id}', [UserController::class, 'destroy'])->name('HapusUser');
Route::post('/updateUser/{id}', [UserController::class, 'update'])->name('UpdateUser');


