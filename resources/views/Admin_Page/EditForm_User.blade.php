<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Account</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/UserPage.css') }}">
    <link rel="icon" href="{{ asset('Image/Image/minimarket.png') }}">
</head>

<body>
    <div class="container-fluid ">
        <div class="row">
            <div id="sidebar" class="col-md-2 bg-transparent position-fixed h-100">
                <div class=" d-flex flex-row gap-2 align-items-center justify-content-center mt-2">
                    <img class="Icon-Nav-Title" src="{{ asset('Image/Image/minimarket.png') }}">
                    <h5 class="text-center py-3">Payment & Inventory App</h5>
                </div>
                <div id="Dashboard-Menu" class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option mt-5">
                    <a href="{{ route('AdminDashboard') }}" class="d-flex align-items-center text-decoration-none text-dark">
                        <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="{{ asset('Image/Vector/Home.svg') }}">
                        <span class="Desc-Menu" class="text-dark">Dashboard</span>
                    </a>
                </div>
                <div id="Payment-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('penjualan.index') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Payment.svg') }}">
                        <span class="text-dark">Penjualan</span>
                    </a>
                </div>
                <div id="Stok-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('AdminStockPage') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Stuff.svg') }}">
                        <span class="text-dark">Stok Barang</span>
                    </a>
                </div>

                <div id="Supplier-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('supplier.index') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Supplier.svg') }}">
                        <span class="text-dark">Supplier</span>
                    </a>
                </div>

                <div id="Report-Menu" class="py-3 menu-option mt-3">
                    <a href="Admin_Report" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Report.svg') }}">
                        <span class="text-dark">Report</span>
                    </a>
                </div>

                <div id="Akun-Menu" class="py-3 menu-option mt-3 d-flex align-items-center rounded-pill bg-dark">
                    <a href="" class="d-flex align-items-center text-decoration-none ">
                        <img class="Icon-Nav ms-5 me-3 bg-light" src="{{ asset('Image/Vector/User.svg') }}">
                        <span class="text-light">Akun Managenent</span>
                    </a>
                </div>

                <div id="SignOut-Menu" class="py-3 menu-option mt-3">
                    <a href="Landing_Page" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/SignOut.svg') }}">
                        <span class="text-dark">Sign Out</span>
                    </a>
                </div>
            </div>
            <div id="main-content" class="col w-100 d-flex flex-column justify-content-center align-items-center ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3 w-100 mb-5" id="navbar-Hello">
                    <div class="container-fluid mx-2">
                        <p class="navbar-brand">Hello, Admin</p>
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link" href="#">
                                <img class="Icon-Nav" src="{{ asset('Image/Vector/Search.svg') }}">
                            </a>
                            <a class="nav-link" href="User_Page.html">
                                <img class="Icon-Nav" src="{{ asset('Image/Vector/Admin-Icon.svg') }}">
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="container w-75 form-wrapper p-0 m-0 bg-light">
                    <div class="container-fluid w-100 bg-light p-0 m-0">
                        <p class="mb-4 text-center">{{ $User->username }} || Account</p>
                        <div class="card m-auto" style="width: 18rem;">
                            <img id="Account-image" src="{{ asset('Image/Vector/User.svg') }}" class="card-img-top p-5" alt="...">
                        </div>
                    </div>

                    <div class="container-fluid h-50 w-100 d-flex flex-column justify-content-center align-items-center bg-light p-0 m-0">
                        <p class=" mt-5" style="font-size: 18px;">As a Admin You Can Modify This Account Information</p>

                        <form action=" {{ route('user.update', $User->first()->id) }} " method="POST" class="w-50 mt-2 bg-light needs-validation" novalidate>
                            @method('put')
                            @csrf
                            @if (session('message'))
                            <p style="color: green;">{{ session('message') }}</p>
                            @endif
                            <div class="mb-4 d-flex flex-row">
                                <img id="user-icon" src="{{ asset('Image/Vector/User.svg') }}" class="icon" alt="User Icon" style="width: 15px; margin-right: 10px;">
                                <div class="d-flex flex-column w-100">
                                    <input type="text" class="form rounded" name="username" value="{{ $User->username }}" id="Username_Login" placeholder="Username" required>
                                    <p id="Username_Valid" class="pt-2 ps-1" style="color: red;">
                                    </p>
                                </div>
                            </div>

                            <div class="mb-4 d-flex">
                                <img id="password-icon" src="{{ asset('Image/Vector/Lock.svg') }}" class="icon" alt="User Icon" style="width: 15px; margin-right: 10px;">
                                <div class="d-flex flex-column w-100">
                                    <input type="email" class="form rounded" value="{{ $User->email }}" name="email" id="Password_Login" placeholder="Current Password" required>
                                    <p id="Password_Valid" class=" pt-2 ps-1" style="color: red;"">
                                    </p>
                                </div>
                            </div>

                            <div class=" mb-4 d-flex">
                                        <img id="password-icon" src="{{ asset('Image/Vector/Key.svg') }}" class="icon" alt="User Icon" style="width: 15px; margin-right: 10px;">
                                    <div class="d-flex flex-column w-100">
                                        <input type="text" value="{{ $User->NoTelp }}" class="form rounded" name="NoTelp" id="Password_Login" placeholder="New Password" required>
                                        <p id="Password_Valid" class=" pt-2 ps-1" style="color: red;"">
                                    </p>
                                </div>
                            </div>

                            <label for=" Method" class="w-100 px-4">Role<br>
                                            <select id="method" name="role" class="w-100">
                                                <option value="Admin">Admin</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                            </label>
                                            @error('email')
                                            <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        <div class="d-flex flex-row gap-5 justify-content-start mt-5">
                                            <button type="submit" class="bg-success px-3 text-light">Add</button>
                                            <button class="bg-danger px-3 text-light">Cancel</button>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>

</body>

</html>
