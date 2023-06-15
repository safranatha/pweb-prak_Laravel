<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Account</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/Stock_masukKeluar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/SalesPage.css') }}">
    <link rel="icon" href="{{ asset('Image/Image/minimarket.png') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="col-md-2 bg-transparent position-fixed h-100">
                <div class=" d-flex flex-row gap-2 align-items-center justify-content-center mt-2">
                    <img class="Icon-Nav-Title" src="{{ asset('Image/Image/minimarket.png') }}">
                    <h5 class="text-center py-3">Payment & Inventory App</h5>
                </div>
                <div id="Dashboard-Menu"
                    class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option mt-5">
                    <a href="Admin_Dashboard.html" class="d-flex align-items-center text-decoration-none text-dark">
                        <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="{{ asset('Image/Vector/Home.svg') }}">
                        <span class="Desc-Menu" class="text-dark">Dashboard</span>
                    </a>
                </div>
                <div id="Payment-Menu" class="py-3 menu-option mt-3">
                    <a href="Sales_Page.html" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Payment.svg') }}">
                        <span class="text-dark">Penjualan</span>

                    </a>
                </div>
                <div id="Stok-Menu" class="py-3 menu-option mt-3">
                    <a href="Admin_Stock_Barang" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Stuff.svg') }}">
                        <span class="text-dark">Stok Barang</span>
                    </a>
                </div>

                <div id="Supplier-Menu" class="py-3 menu-option mt-3 d-flex align-items-center bg-dark rounded-pill">
                    <a href="Admin_Supplier" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3 bg-light" src="{{ asset('Image/Vector/Supplier.svg') }}">
                        <span class="text-light">Supplier</span>
                    </a>
                </div>

                <div id="Report-Menu" class="py-3 menu-option mt-3">
                    <a href="Report.html" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Report.svg') }}">
                        <span class="text-dark">Report</span>
                    </a>
                </div>

                <div id="Akun-Menu" class="py-3 menu-option mt-3">
                    <a href="User_Page.html" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/User.svg') }}">
                        <span class="text-dark">Akun</span>
                    </a>
                </div>

                <div id="SignOut-Menu" class="py-3 menu-option mt-3">
                    <a href="../Login Page/Login.html" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/SignOut.svg') }}">
                        <span class="text-dark">Sign Out</span>
                    </a>
                </div>
            </div>
            <div id="main-content" class="col-md-9">
                <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
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
                <!-- end of navbar -->

                    <div class="container w-50 d-flex flex-column justify-content-center gap-5 bg-light mt-5 mb-5">
                        <h1 class="text-center mt-5">Edit Penjualan</h1>
                        <form action="{{ route('UpdatePenjualan', $penjualan->id) }}" id="formpenjualan" method="POST"
                            class="d-flex flex-column gap-4">
                            @csrf
                            <label for="Id_supplier" class="w-100 px-2"> Total<br>
                                <input id="Id_supplier" value="{{ $penjualan->Total }}" name="Total"
                                    class="w-100" type="text" required>
                            </label>

                            <label for="j_supplier" class="w-100 px-2"> Date<br>
                                <input id="Id_supplier" value="{{ $penjualan->Date }}" name="Date"
                                    class="w-100" type="text" required>
                            </label>

                            <label for="k_supplier" class="w-100 px-2">Method<br>
                                <input id="Id_supplier" value="{{ $penjualan->Method }}" name="Method"
                                    class="w-100" type="text" required>
                            </label>
                            <label for="t_supplier" class="w-100 px-2">Status<br>
                                <input id="Id_supplier" value="{{ $penjualan->Status }}" name="Status"
                                    class="w-100" type="text" required>
                            </label>

                            
                            <div class="d-flex flex-row gap-5 justify-content-start mt-5">
                                <button type="submit" class="bg-success px-3 text-light">Edit</button>
                                <button id="cancelButton" class="bg-danger px-3 text-light">Cancel</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>
