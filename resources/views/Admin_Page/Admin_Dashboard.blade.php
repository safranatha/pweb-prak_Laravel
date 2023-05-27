<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin || Dashboard</title>
  <link rel="stylesheet" href="front/css/bootstrap.css">
  <link rel="stylesheet" href="css/AdminDash.css">
  <link rel="icon" href="Image/Image/minimarket.png">
  <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
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
          <a href="#" class="d-flex align-items-center text-decoration-none text-light">
            <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="Image/Vector/Home.svg">
            <span class="Desc-Menu" class="text-dark">Dashboard</span>
          </a>
        </div>
        <div id="Payment-Menu" class="py-3 menu-option mt-3">
          <a href="{{ route('penjualan.index')}}" class="d-flex align-items-center text-decoration-none">
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
          <a href="{{ route('supplier.index') }}" class="d-flex align-items-center text-decoration-none">
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
          <a href="{{ route('AdminAccount') }}" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="Image/Vector/User.svg">
            <span class="text-dark">Akun</span>
          </a>
        </div>

        <div id="SignOut-Menu" class="py-3 menu-option mt-3">
          <a href="{{ route('Logout') }}" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="Image/Vector/SignOut.svg">
            <span class="text-dark">Sign Out</span>
          </a>
        </div>
      </div>
      <!-- End of Sidebar -->

      <div id="main-content" class="col-md-9">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
          <div class="container-fluid mx-2">
            <p class="navbar-brand">Hello, Admin</p>
            <div class="navbar-nav ms-auto">
              <p class="mt-2">Muhammad Alfariza Rasendria</p>
              <a class="nav-link" href="User_Page.html">
                <img class="Icon-Nav" src="Image/Vector/Admin-Icon.svg">
              </a>
            </div>
          </div>
        </nav>
        <!-- end of navbar -->
        <div id="container-top" class="container my-5 ms-3">
          <p class="mt-4 mb-1 text-center">Admin || Dashboard</p>
          <p class="mb-5 text-center">14/03/2023</p>
          <h5 class="mb-4">Monthly Report</h5>
          <div class="row gy-3 gap-5">
            <div class="d-flex flex-row gap-4 w-100">
              <a href="../Admin_Page/Report.html" class="w-75 text-decoration-none">
                <div id="Amount-3" class="rounded">
                  <p>Total Income</p>
                  <p>Rp. 2341</p>
                  <p class="text-end">03/2023</p>
                </div>
              </a>
              <a href="../Admin_Page/Report.html" class="w-75 text-decoration-none">
                <div id="Amount-3" class=" rounded">
                  <p>Total Item Terjual</p>
                  <p>2341 Item</p>
                  <p class="text-end">03/2023</p>
                </div>
              </a>

              <a href="../Admin_Page/Report.html" class="w-75 me-3 text-decoration-none">
                <div id="Amount-3" class=" rounded">
                  <p>Total Transaksi</p>
                  <p>2341</p>
                  <p class="text-end">03/2023</p>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div id="container-bottom" class="container my-5 ms-3" style="height: 20%;">
          <div class="row gy-3 gap-5 h-100">
            <div class="d-flex flex-row justify-content-center align-items-center gap-4 w-100 m-0">
              <a href="{{ route('penjualan.index') }}" class="w-75 h-50  text-decoration-none ">
                <div id="Amount-1" class="Dash-Option h-100 rounded d-flex justify-content-center align-items-center" style="box-shadow: 3px 3px 8px #888888;">
                  <p class="pt-3">History Pembayaran</p>
                </div>
              </a>
              <a href="{{ route('AdminStok') }}" class="w-75 h-50  text-decoration-none ">
                <div id="Amount-2" class="Dash-Option h-100 rounded d-flex justify-content-center align-items-center" style="box-shadow: 3px 3px 8px #888888;">
                  <p class="pt-3">Stock Barang</p>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>

      <script src="front/js/bootstrap.bundle.js"></script>

</body>

</html>
