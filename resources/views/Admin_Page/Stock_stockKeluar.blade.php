<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Account</title>
    <link rel="stylesheet" href="front/css/bootstrap.css">
    <link rel="stylesheet" href="Css/Stock_masukKeluar.css">
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
                <div id="Dashboard-Menu"
                    class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option mt-5">
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
                <div id="Stok-Menu" class="py-3 menu-option mt-3 d-flex a bg-dark rounded-pill">
                    <a href="{{ route('AdminStok') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3 bg-light" src="Image/Vector/Stuff.svg">
                        <span class="text-light">Stok Barang</span>
                    </a>
                </div>

                <div id="Supplier-Menu" class="py-3 menu-option mt-3">
                    <a href="{{route('supplier.index')}}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Supplier.svg">
                        <span class="text-dark">Supplier</span>
                    </a>
                </div>

                <div id="Report-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('AdminReport') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Report.svg">
                        <span class="text-dark">Report</span>
                    </a>
                </div>

                <div id="Akun-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('AdminAccount') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/User.svg">
                        <span class="text-dark">Akun</span>
                    </a>
                </div>

                <div id="SignOut-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('LandingPage') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/SignOut.svg">
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
                                <img class="Icon-Nav" src="Image/Vector/Search.svg">
                            </a>
                            <a class="nav-link" href="User_Page.html">
                                <img class="Icon-Nav" src="Image/Vector/Admin-Icon.svg">
                            </a>
                        </div>
                    </div>
                </nav>
                <!-- end of navbar -->

                <div id="container-under" class="container my-5">
                    <h5 class="pb-4">Stok Keluar</h5>
                    <form action="" method="post">
                        <div class="row gy-3">
                            <div class="col-md-3">
                                <p>Id Barang</p>
                                <input type="text" class="form-control" placeholder="Input Id Barang" required>
                            </div>
                            <div class="col-md-3">
                                <p>Nama Barang</p>
                                <input type="text" class="form-control" placeholder="Input Nama Barang" required>
                            </div>
                            <div class="col-md-3">
                                <p>Jumlah</p>
                                <input type="text" class="form-control" placeholder="Input Jumlah Barang" required>
                            </div>
                            <div class="col-md-3">
                                <p>Tanggal Keluar</p>
                                <input type="date" class="form-control" required>
                            </div>


                            <div class="col-md-3 mt-3 pt-3 m-auto">
                                <button type="submit" class="w-50 text-center">Search</button>
                            </div>
                        </div>
                        <!-- breakkkkkkkkkkkkk -->
                    </form>
                </div>


                <div class="container my-5">
                    <table class="table table-borderless  text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori Barang</th>
                                <th>Jumlah</th>
                                <th>Tanggal Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>045212554</td>
                                <td>Potato Cheeze Flavor</td>
                                <td>Makanan</td>
                                <td>100</td>
                                <td>15/03/2023</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>045212554</td>
                                <td>Potato Cheeze Flavor</td>
                                <td>Makanan</td>
                                <td>100</td>
                                <td>15/03/2023</td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>045212554</td>
                                <td>Potato Cheeze Flavor</td>
                                <td>Makanan</td>
                                <td>100</td>
                                <td>15/03/2023</td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>045212554</td>
                                <td>Potato Cheeze Flavor</td>
                                <td>Makanan</td>
                                <td>100</td>
                                <td>15/03/2023</td>

                            </tr>
                            <tr>
                                <td>5</td>
                                <td>045212554</td>
                                <td>Potato Cheeze Flavor</td>
                                <td>Makanan</td>
                                <td>100</td>
                                <td>15/03/2023</td>

                </div>
            </div>

</body>

</html>
