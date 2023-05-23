<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin || Dashboard</title>
  <link rel="stylesheet" href="front/css/bootstrap.css">
  <link rel="stylesheet" href="Css/AdminDash copy.css">
  <link rel="icon" href="Image/Image/minimarket.png">
  <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div id="sidebar" class="col-md-2 bg-transparent position-fixed h-100">
        <div class=" d-flex flex-row gap-2 align-items-center justify-content-center mt-2">
          <img class="Icon-Nav-Title" src="../Env/Image/minimarket.png">
          <h5 class="text-center py-3">Payment & Inventory App</h5>
        </div>
        <div id="Dashboard-Menu"
          class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option mt-5">
          <a href="Admin_Dashboard.html" class="d-flex align-items-center text-decoration-none text-light">
            <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="../Env/Vector/Home.svg">
            <span class="Desc-Menu" class="text-dark">Dashboard</span>
          </a>
        </div>
        <div id="Payment-Menu" class="py-3 menu-option mt-3">
          <a href="Sales_Page.html" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="../Env/Vector/Payment.svg">
            <span class="text-dark">Penjualan</span>

          </a>
        </div>
        <div id="Stok-Menu" class="py-3 menu-option mt-3">
          <a href="Stock.html" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="../Env/Vector/Stuff.svg">
            <span class="text-dark">Stok Barang</span>
          </a>
        </div>

        <div id="Supplier-Menu" class="py-3 menu-option mt-3">
          <a href="Supplier.html" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="../Env/Vector/Supplier.svg">
            <span class="text-dark">Supplier</span>
          </a>
        </div>

        <div id="Report-Menu" class="py-3 menu-option mt-3">
          <a href="Report.html" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="../Env/Vector/Report.svg">
            <span class="text-dark">Report</span>
          </a>
        </div>

        <div id="Akun-Menu" class="py-3 menu-option mt-3">
          <a href="User_Page.html" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="../Env/Vector/User.svg">
            <span class="text-dark">Akun</span>
          </a>
        </div>

        <div id="SignOut-Menu" class="py-3 menu-option mt-3">
          <a href="../Login Page/Login.html" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="../Env/Vector/SignOut.svg">
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
                <img class="Icon-Nav" src="../Env/Vector/Admin-Icon.svg">
              </a>
            </div>
          </div>
        </nav>
        <!-- end of navbar -->


        <div class="container" >
          <h5 class="pb-4 mt-5">History Pembayaran</h5>
          <form action="" method="post">
            <div class="row gy-3">
              <div class="col-md-3">
                <p>Invoice Id</p>
                <input type="text" class="form-control" placeholder="Input Invoice Id" required>
              </div>
              <div class="col-md-3">
                <p>Tanggal</p>
                <input type="date" class="form-control" required>
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

        <div class="container mt-3">
            <table class="table table-borderless  text-center">
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
                  <tr>
                    <td>1</td>
                    <td>045212554</td>
                    <td>300000</td>
                    <td>15/03/2023</td>
                    <td>Cash</td>
                    <td>Lunas</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>045212554</td>
                    <td>300000</td>
                    <td>15/03/2023</td>
                    <td>Cash</td>
                    <td>Lunas</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>045212554</td>
                    <td>300000</td>
                    <td>15/03/2023</td>
                    <td>Cash</td>
                    <td>Lunas</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>045212554</td>
                    <td>300000</td>
                    <td>15/03/2023</td>
                    <td>Cash</td>
                    <td>Lunas</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>045212554</td>
                    <td>300000</td>
                    <td>15/03/2023</td>
                    <td>Cash</td>
                    <td>Lunas</td>
        </div>

      <script src="../Env/bootstrap/js/bootstrap.bundle.js"></script>

</body>

</html>
