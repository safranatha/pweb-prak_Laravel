<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Payment</title>
    <link rel="stylesheet" href="front/css/bootstrap.css">
    <link rel="stylesheet" href="css/SalesPage.css">
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
                    <a href="Admin_Dashboard" class="d-flex align-items-center text-decoration-none text-dark">
                        <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="Image/Vector/Home.svg">
                        <span class="Desc-Menu" class="text-dark">Dashboard</span>
                    </a>
                </div>
                <div id="Payment-Menu" class="py-3 menu-option mt-3 bg-dark rounded-pill d-flex align-items-center">
                    <a href="Admin_Sales_Page" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3 bg-light" src="Image/Vector/Payment.svg">
                        <span class="text-light">Penjualan</span>

                    </a>
                </div>
                <div id="Stok-Menu" class="py-3 menu-option mt-3">
                    <a href="Admin_Stock_Barang" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Stuff.svg">
                        <span class="text-dark">Stok Barang</span>
                    </a>
                </div>

                <div id="Supplier-Menu" class="py-3 menu-option mt-3">
                    <a href="Admin_Supplier" class="d-flex align-items-center text-decoration-none">
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

                <div id="Akun-Menu" class="py-3 menu-option mt-3">
                    <a href="Admin_Account" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="Image/Vector/User.svg">
                        <span class="text-dark">Akun</span>
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


                <div class="container ms-3 my-5" id="table-title">
                    <h5 class="pb-4">History Pembayaran</h5>
                    <form action="" method="post">
                        <div class="row gy-3">
                            <div class="col-md-3 ">
                                <p>Invoice Id</p>
                                <input type="text" class="form-control mb-2" placeholder="Input Invoice Id" required>
                            </div>
                            <div class="col-md-3">
                                <p>Tanggal</p>
                                <input type="date" class="form-control mb-2" required>
                            </div>
                            <div class="col-md-3">
                                <p>Payment Method</p>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Credit</option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-5 pt-3">
                                <button type="submit" class="w-50 text-center">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="containerTable" class="container my-5 ms-3">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Invoice Id</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Metode Pembayaran</th>
                                <th>Status Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penjualan as $item)
                            <tr>
                                <td>1</td>
                                <td>{{$item->Total}}</td>
                                <td>{{$item->Date}}</td>
                                <td>{{$item->Method}}</td>
                                <td>{{$item->Status}}</td>
                                <td>Lunas</td>
                            </tr>
                            
                            @endforeach
                </div>

                


            </div>

</body>

</html>