<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Account</title>
    <link rel="stylesheet" href="front/css/bootstrap.css">
    <link rel="stylesheet" href="css/Report.css">
    <link rel="icon" href="/Image/Image/minimarket.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="col-md-2 bg-transparent position-fixed h-100">
                <div class=" d-flex flex-row gap-2 align-items-center justify-content-center mt-2">
                    <img class="Icon-Nav-Title" src="/Image/Image/minimarket.png">
                    <h5 class="text-center py-3">Payment & Inventory App</h5>
                </div>
                <div id="Dashboard-Menu"
                    class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option mt-5">
                    <a href="Admin_Dashboard" class="d-flex align-items-center text-decoration-none text-dark">
                        <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="/Image/Vector/Home.svg">
                        <span class="Desc-Menu" class="text-dark">Dashboard</span>
                    </a>
                </div>
                <div id="Payment-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('AdminTampilPayment')}}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="/Image/Vector/Payment.svg">
                        <span class="text-dark">Penjualan</span>

                    </a>
                </div>
                <div id="Stok-Menu" class="py-3 menu-option mt-3">
                    <a href="Admin_Stock_Barang" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="/Image/Vector/Stuff.svg">
                        <span class="text-dark">Stok Barang</span>
                    </a>
                </div>

                <div id="Supplier-Menu" class="py-3 menu-option mt-3">
                    <a href="{{route('supplier.index')}}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="/Image/Vector/Supplier.svg">
                        <span class="text-dark">Supplier</span>
                    </a>
                </div>

                <div id="Report-Menu" class="py-3 menu-option mt-3 bg-dark rounded-pill d-flex align-items-center">
                    <a href="{{ route('AdminReport') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3 bg-light px-1" src="/Image/Vector/Report.svg">
                        <span class="text-light">Report</span>
                    </a>
                </div>

                <div id="Akun-Menu" class="py-3 menu-option mt-3">
                    <a href="{{route('user.index')}}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="/Image/Vector/User.svg">
                        <span class="text-dark">User Managenent</span>
                    </a>
                </div>

                <div id="SignOut-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('Logout') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="/Image/Vector/SignOut.svg">
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
                                <img class="Icon-Nav" src="/Image/Vector/Search.svg">
                            </a>
                            <a class="nav-link" href="User_Page.html">
                                <img class="Icon-Nav" src="/Image/Vector/Admin-Icon.svg">
                            </a>
                        </div>
                    </div>
                </nav>
                <!-- end of navbar -->

                <div id="container-bottom" class="container my-5 ms-3" style="height: 50%;">
                    <div class="row gy-3 gap-5 h-100 mt-5">
                        <div class="d-flex flex-row justify-content-center align-items-center gap-4 w-100 m-0">
                            <a href="{{ route('penjualan.index') }}"
                                class="w-75 h-100  text-decoration-none ">
                                <div id="Amount-1"
                                    class="Dash-Option h-75 rounded d-flex justify-content-center align-items-center">
                                    <p class="pt-3">History Pembayaran</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row gy-3 gap-5 h-100">
                    <div class="d-flex flex-row justify-content-center align-items-center gap-4 w-100 m-0 p-0 h-50">
                        <a href="{{ route('barang.index') }}" class="w-75 h-100 text-decoration-none ">
                            <div id="Amount-2"
                                class="Dash-Option h-75 rounded d-flex justify-content-center align-items-center">
                                <p class="pt-3">Stok Masuk</p>
                            </div>
                        </a>
                        <a href="{{ route('AdminStokKeluar') }}" class="w-75 h-100 text-decoration-none ">
                            <div id="Amount-3"
                                class="Dash-Option h-75 rounded d-flex justify-content-center align-items-center">
                                <p class="pt-3">Stock Keluar</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

</body>

</html>
