<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff || Payment</title>
  <link rel="stylesheet" href="../Env/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../Env/Css/SalesPage.css">
  <link rel="icon" href="../Env/Image/minimarket.png">
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
          class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option  mt-5">
          <a href="Staff_Dashboard.html" class="d-flex align-items-center text-decoration-none text-light">
            <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="../Env/Vector/Payment.svg">
            <span class="text-dark Desc-Menu">Pembayaran</span>
          </a>
        </div>
        <div id="Payment-Menu" class="py-3  menu-option">
          <a href="Sales_Page.html" class="bg-dark rounded-pill d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3 bg-light" src="../Env/Vector/Stuff.svg">
            <span class="text-light">Penerimaan barang</span>
          </a>
        </div>

        <div id="Akun-Menu" class="py-3 menu-option mt-5">
          <a href="User_Page.html" class="d-flex align-items-center text-decoration-none ">
            <img class="Icon-Nav ms-5 me-3" src="../Env/Vector/User.svg">
            <span class="text-dark">Akun</span>
          </a>
        </div>
        <div id="SignOut-Menu" class="py-3 menu-option mt-3">
          <a href="../page_antara.html" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="../Env/Vector/SignOut.svg">
            <span class="text-dark">Sign Out</span>
          </a>
        </div>

      </div>
      <div id="main-content" class="col w-50 d-flex flex-column justify-content-center align-items-center mb-5">
        <nav class="navbar w-100 navbar-expand-lg navbar-light bg-light mt-2">
          <div class="container-fluid mx-2">
            <p class="navbar-brand">Hello, Admin</p>
            <div class="navbar-nav ms-auto">
              <p class="mt-2">Muhammad Alfariza Rasendria</p>
              <a class="nav-link" href="#">
                <img class="Icon-Nav" src="../Env/Vector/Admin-Icon.svg">
              </a>
            </div>
          </div>
        </nav>
        <div class="container w-50 d-flex flex-column justify-content-center gap-5 bg-light mt-5 mb-5">
          <h1 class="text-center mt-5">Add Data</h1>
          <form action="" method="post" class="d-flex flex-column gap-4">
            <label for="Id_Barang"> Id_Barang<br>
              <input id="Id_Barang" class="w-100" type="text" required>
            </label>
            <label for="Id_Barang"> Nama_Barang<br>
              <input id="Id_Barang" class="w-100" type="text" required>
            </label>
            <label for="Id_Barang">Kategori Barang<br>
              <input id="Id_Barang" class="w-100" type="text" required>
            </label>
            <label for="Id_Barang"> Jumlah Barang<br>
              <input id="Id_Barang" class="w-100" type="number" required>
            </label>
            <label for="Id_Barang">Tanggal<br>
              <input id="Id_Barang" class="w-100" type="date" required>
            </label>

            <label for="Id_Barang">Supplier<br>
              <input id="Id_Barang" class="w-100" type="text" required>
            </label>



            <div class="d-flex flex-row gap-5 justify-content-start mt-5">
              <button type="submit" class="bg-success px-3 text-light">Add</button>
              <button class="bg-danger px-3 text-light">Cancel</button>
            </div>
          </form>

        </div>
      </div>

</body>

</html>