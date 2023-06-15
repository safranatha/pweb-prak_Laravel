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
                    class="py-3  rounded-pill d-flex align-items-center justify-content-start menu-option mt-5">
                    <a href="{{ route('pembayaran.index') }}" class="d-flex align-items-center text-decoration-none text-light">
                        <img id="Home-Icon" class="Icon-Nav ms-5 me-3" src="Image/Vector/Payment.svg">
                        <span class="Desc-Menu text-dark">Pembayaran</span>
                    </a>
                </div>
                <div id="Dashboard-Menu"
                    class="py-3 bg-dark rounded-pill d-flex align-items-center justify-content-start menu-option mt-3">
                    <a href="{{ route('order.index') }}"
                        class="d-flex align-items-center text-decoration-none text-light">
                        <img id="Home-Icon" class="Icon-Nav bg-light ms-5 me-3" src="Image/Vector/Payment.svg">
                        <span class="Desc-Menu text-light">Pemesanan</span>
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


                <!-- <div id="Akun-Menu" class="py-3 menu-option mt-2">
          <a href="{{ route('StaffAccount') }}" class="d-flex align-items-center text-decoration-none">
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


            <div id="main-content"
                class="col w-50 d-flex flex-column justify-content-center align-items-center mb-5 mt-5">
                {{-- <div class="container">
                    <div class="row">
                        <div class="col">
                            1 of 2
                        </div>
                        <div class="col">
                            2 of 2
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            1 of 3
                        </div>
                        <div class="col">
                            2 of 3
                        </div>
                        <div class="col">
                            3 of 3
                        </div>
                    </div>
                </div>

                @foreach ($barang as $item)
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->Nama_barang }}</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach --}}
                <div class="container">
                    <div class="row">
                        @if ($barang->isEmpty())
                            <p style="font-size: 20px">Tidak ada Barang Pada Inventory</p>
                        @else
                            @foreach ($barang as $item)
                                <div class="col-md-3 mb-5">
                                    <form action="{{ route('StaffKeranjang') }}" method="post">
                                        <div class="col mb-5">
                                            <div class="card text-center" style="width: 18rem;">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $item->Nama_barang }}</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                </div>
                                                @csrf
                                                <input type="text" name="id" value="{{ $item->id }}" hidden>
                                                <button type="submit" href="#" class="btn btn-primary">Tambahkan
                                                    Ke Keranjang</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
