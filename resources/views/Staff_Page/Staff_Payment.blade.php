<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff || Dashboard</title>
  <link rel="stylesheet" href="Front/css/bootstrap.css">
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
          class="py-3 bg-dark rounded-pill d-flex align-items-center justify-content-start menu-option mt-5">
          <a href="#" class="d-flex align-items-center text-decoration-none text-light">
            <img id="Home-Icon" class="Icon-Nav bg-light ms-5 me-3" src="Image/Vector/Payment.svg">
            <span class="Desc-Menu text-light">Pembayaran</span>
          </a>
        </div>
        <div id="Payment-Menu" class="py-3 menu-option">
          <a href="{{ route('StaffStock') }}" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Stuff.svg">
            <span class="text-dark">Penerimaan barang</span>
          </a>
        </div>

        <div id="Akun-Menu" class="py-3 menu-option mt-4 d-flex align-items-center rounded-pill">
          <a href="{{ route('StaffSupplier') }}" class="d-flex align-items-center text-decoration-none ">
            <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Supplier.svg">
            <span class="text-dark">Tambah Supplier</span>
          </a>
        </div>


        <div id="Akun-Menu" class="py-3 menu-option mt-2">
          <a href="{{ route('StaffAccount') }}" class="d-flex align-items-center text-decoration-none">
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

      <div id="main-content" class="col w-50 d-flex flex-column justify-content-center align-items-center mb-5">
        <nav class="navbar w-100 navbar-expand-lg navbar-light bg-light mt-2">
          <div class="container-fluid mx-2">
            <p class="navbar-brand">Hello, Staff</p>
            <div class="navbar-nav ms-auto">
              <p class="mt-2">Muhammad Alfariza Rasendria</p>
              <a class="nav-link" href="#">
                <img class="Icon-Nav" src="Image/Vector/Admin-Icon.svg">
              </a>
            </div>
          </div>
        </nav>
        <div class="container w-50 d-flex flex-column justify-content-center gap-5 bg-light mt-5 mb-1">
          <h1 class="text-center mt-5">Add Data</h1>
          <form action="{{route('penjualan.store')}}" method="post" class="d-flex flex-column gap-4">
            @csrf

            {{-- <label for="Id_Barang"> Id Barang<br>
              <input id="Id_Barang" class="w-100" type="text" required>
            </label>
            <label for="Id_Barang"> Nama Barang<br>
              <input id="Id_Barang" class="w-100" type="text" required>
            </label> --}}

            <div class="col-md-3">
              <p>Total</p>
              <input type="number" class="form-control mb-2" name="Total" id="Total" required>
          </div>
          <div class="col-md-3">
              <p>Date</p>
              <input type="date" class="form-control mb-2" name="Date" id="Date" required>
          </div>
            <label for="Method">Metode Pembayaran<br>
              <select id="method" name="Method" class="w-100">
                <option value="Cash">Cash</option>
                <option value="Debit">Debit</option>
              </select>
            </label>

            <label for="Status">Status<br>
              <select id="Status" name="Status" class="w-100">
                <option value="Lunas">Lunas</option>
                <option value="Belum Lunas">Belum Lunas</option>
              </select>
            </label>

            <h3 class="mt-4">Total Bayar :</h3>
            <h5 class="text-danger">200000</h5>

            <div class="d-flex flex-row gap-5 justify-content-start mt-5">
              <button type="submit" class="bg-success px-3 text-light">Add</button>
              <button class="bg-danger px-3 text-light">Cancel</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <script src="Image/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
