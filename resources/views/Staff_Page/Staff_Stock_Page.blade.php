<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff || Payment</title>
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
          class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option  mt-5">
          <a href="{{ route('StaffPayment') }}" class="d-flex align-items-center text-decoration-none text-light">
            <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="Image/Vector/Payment.svg">
            <span class="text-dark Desc-Menu">Pembayaran</span>
          </a>
        </div>
        <div id="Payment-Menu" class="py-3  menu-option">
          <a href="Staff_Stock" class="bg-dark rounded-pill d-flex align-items-center text-decoration-none p-1">
            <img class="Icon-Nav ms-5 me-3 bg-light" src="Image/Vector/Stuff.svg">
            <span id="TextRow" class="text-light">Penerimaan barang</span>
          </a>
        </div>

        <div id="Akun-Menu" class="py-3 menu-option mt-4 d-flex align-items-center rounded-pill">
          <a href="{{ route('StaffSupplier') }}" class="d-flex align-items-center text-decoration-none ">
            <img class="Icon-Nav ms-5 me-3" src="Image/Vector/Supplier.svg">
            <span class="text-dark">Tambah Supplier</span>
          </a>
        </div>

        <!-- <div id="Akun-Menu" class="py-3 menu-option mt-2">
          <a href="{{ route('StaffAccount') }}" class="d-flex align-items-center text-decoration-none ">
            <img class="Icon-Nav ms-5 me-3" src="Image/Vector/User.svg">
            <span class="text-dark">Akun</span>
          </a>
        </div> -->
        <div id="SignOut-Menu" class="py-3 menu-option mt-3">
          <a href="{{ route('Logout') }}" class="d-flex align-items-center text-decoration-none">
            <img class="Icon-Nav ms-5 me-3" src="Image/Vector/SignOut.svg">
            <span class="text-dark">Sign Out</span>
          </a>
        </div>

      </div>
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
        <div class="container w-50 d-flex flex-column justify-content-center gap-5 bg-light mt-5 mb-5">
          <h1 class="text-center mt-5">Add Data</h1>
          <form action="{{route('barang.store')}}" id="formBarang" method="post" class="d-flex flex-column gap-4">
            @csrf

            <label for="Id_Barang"> Nama_Barang<br>
              <input id="Id_Barang" name="Nama_barang" class="w-100" type="text" required>
            </label>
            <label for="k_Barang">Kategori Barang<br>
              <input id="Id_Barang" name="Kategori_barang" class="w-100" type="text" required>
            </label>
            <label for="j_Barang"> Jumlah Barang<br>
              <input id="Id_Barang" name="Jumlah_barang" class="w-100" type="number" required>
            </label>
            <label for="t_Barang">Tanggal<br>
              <input id="Id_Barang" name="Tanggal" class="w-100" type="date" required>
            </label>

            <label for="s_Barang">Supplier<br>
              <input id="Id_Barang" name="Supplier" class="w-100" type="text" required>
            </label>



            <div class="d-flex flex-row gap-5 justify-content-start mt-5">
              <button type="submit" class="bg-success px-3 text-light">Add</button>
              <button id="cancelButton" class="bg-danger px-3 text-light">Cancel</button>
            </div>
          </form>

        </div>
      </div>

</body>

</html>

<script>
    document.getElementById('cancelButton').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('formBarang').reset();
      document.getElementById('Id_Barang').focus();
    });
  </script>
