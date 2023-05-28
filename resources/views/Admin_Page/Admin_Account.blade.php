<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Account</title>
    <link rel="stylesheet" href="front/css/bootstrap.css">
    <link rel="stylesheet" href="css/UserPage.css">
    <link rel="icon" href="Image/Image/minimarket.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="col-md-2 bg-transparent position-fixed h-100">
                <div class=" d-flex flex-row gap-2 align-items-center justify-content-center mt-2">
                    <img class="Icon-Nav-Title" src="Image/Image/minimarket.png">
                    <h5 class="text-center py-3">Payment & Inventory App</h5>
                </div>
                <div id="Dashboard-Menu" class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option mt-5">
                    <a href="{{ route('AdminDashboard') }}" class="d-flex align-items-center text-decoration-none text-dark">
                        <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="Image/Vector/Home.svg">
                        <span class="Desc-Menu" class="text-dark">Dashboard</span>
                    </a>
                </div>
                <div id="Payment-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('penjualan.index') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Payment.svg">
                        <span class="text-dark">Penjualan</span>
                    </a>
                </div>
                <div id="Stok-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('AdminStockPage') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Stuff.svg">
                        <span class="text-dark">Stok Barang</span>
                    </a>
                </div>

                <div id="Supplier-Menu" class="py-3 menu-option mt-3">
                    <a href="{{route('supplier.index')}}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Supplier.svg">
                        <span class="text-dark">Supplier</span>
                    </a>
                </div>

                <div id="Report-Menu" class="py-3 menu-option mt-3">
                    <a href="Admin_Report" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Report.svg">
                        <span class="text-dark">Report</span>
                    </a>
                </div>

                <div id="Akun-Menu" class="py-3 menu-option mt-3 d-flex align-items-center rounded-pill bg-dark">
                    <a href="Admin_Account" class="d-flex align-items-center text-decoration-none ">
                        <img class="Icon-Nav ms-5 me-3 bg-light" src="Image/Vector/User.svg">
                        <span class="text-light">Akun</span>
                    </a>
                </div>

                <div id="SignOut-Menu" class="py-3 menu-option mt-3">
                    <a href="Landing_Page" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/SignOut.svg">
                        <span class="text-dark">Sign Out</span>
                    </a>
                </div>
            </div>
            <div id="main-content" class="col-md-9">

                <div class="container-fluid">
                    <p class="mt-4 mb-5 text-center">Admin || Account</p>
                    <div class="card m-auto" style="width: 18rem;">
                        <img id="Account-image" src="Image/Vector/User.svg" class="card-img-top p-5" alt="...">
                    </div>
                </div>
                <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
                    <p class=" mt-5 mb-3" style="font-size: 18px;">Please input username & password before change new password</p>

                    <form action=" {{ route('user.update', $User->first()->id ) }} " method="POST" class="w-50 mt-2 mb-5 needs-validation " novalidate>
                        @method("put")
                        @csrf
                        @if (session('message'))
                            <p style="color: green;">{{ session('message') }}</p>
                            @endif
                        <div class="mb-4 d-flex flex-row">
                            <img id="user-icon" src="Image/Vector/User.svg" class="icon" alt="User Icon" style="width: 15px; margin-right: 10px;">
                            <div class="d-flex flex-column w-100">
                                <input type="text" class="form rounded" value="{{ old('email', Auth::user()->username) }}" name="username" id="Username_Login" placeholder="Username" required>
                                <p id="Username_Valid" class="pt-2 ps-1" style="color: red;">
                                </p>
                            </div>
                        </div>

                        <div class="mb-4 d-flex">
                            <img id="password-icon" src="Image/Vector/Lock.svg" class="icon" alt="User Icon" style="width: 15px; margin-right: 10px;">
                            <div class="d-flex flex-column w-100">
                                <input type="password" class="form rounded" name="password" id="Password_Login" placeholder="Current Password" required>
                                @error('password')
                                <p class="pt-2 ps-1" style="color: red;">{{ $message }}</p>
                                @enderror
                                <p id="Password_Valid" class=" pt-2 ps-1" style="color: red;"">
                          </p>
                        </div>
                      </div>
                      <div class=" mb-4 d-flex">
                                    <img id="password-icon" src="Image/Vector/Key.svg" class="icon" alt="User Icon" style="width: 15px; margin-right: 10px;">
                                <div class="d-flex flex-column w-100">
                                    <input type="password" class="form rounded" name="newpassword" id="Password_Login" placeholder="New Password" required>
                                    <p id="Password_Valid" class=" pt-2 ps-1" style="color: red;"">
                            </p>
                          </div>
                        </div>
                      <button id=" Login-button" type="submit" class="btn btn-primary w-100 fw-semibold">Submit</button>
                    </form>
                </div>
            </div>

</body>

</html>
