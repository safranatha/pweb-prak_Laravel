<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Account</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Supplier.css') }}">
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
                    <a href="{{ route('AdminTampilPayment')}}" class="d-flex align-items-center text-decoration-none text-dark">
                        <img id="Home-Icon" class="Icon-Nav  ms-5 me-3" src="{{ asset('Image/Vector/Home.svg') }}">
                        <span class="Desc-Menu" class="text-dark">Dashboard</span>
                    </a>
                </div>
                <div id="Payment-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('AdminTampilPayment')}}" class="d-flex align-items-center text-decoration-none">
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
                    <a href="{{ route('AdminReport') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Report.svg') }}">
                        <span class="text-dark">Report</span>
                    </a>
                </div>

                <div id="Akun-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('user.index') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/User.svg') }}">
                        <span class="text-dark">User Managenent</span>
                    </a>
                </div>

                <div id="SignOut-Menu" class="py-3 menu-option mt-3">
                    <a href="{{ route('Logout') }}" class="d-flex align-items-center text-decoration-none">
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


                <div class="container ms-3 my-5" id="table-title">
                    <h5 class="pb-4">Daftar Supplier</h5>
                    <form action="{{ route('supplier.index') }}" method="get">
                        <div class="row gy-3">
                            <div class="col-md-3">
                                <p>Nama Supplier</p>
                                <input type="text" class="form-control mb-2" name="Nama_Supplier"
                                    placeholder="Input Nama Supplier">
                            </div>

                            <div class="col-md-3">
                                <p>Alamat Supplier</p>
                                <input type="text" class="form-control mb-2" name="Alamat_Supplier"
                                    placeholder="Input Alamat Supplier">

                            </div>
                            <div class="col-md-3">
                                <p>Kategori Supplier</p>
                                <input type="text" class="form-control mb-2" name="Kategori_Supplier"
                                    placeholder="Input Kategori Supplier">
                            </div>
                            <div class="col-md-3 mt-5 pt-3">
                                <button type="submit" class="w-50 text-center">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="table-1" class="container my-5 ms-3">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Supplier Id</th>
                                <th>Nama Supplier</th>
                                <th>Alamat Supplier</th>
                                <th>Kategori Supplier</th>
                                <th>Nomor Telefon</th>
                                <th>Metode Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            <?php $i = $supplier->firstItem(); ?>
                            @foreach ($supplier as $suppliers)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $suppliers->id }}</td>
                                    <td>{{ $suppliers->Nama_Supplier }}</td>
                                    <td>{{ $suppliers->Alamat_Supplier }}</td>
                                    <td>{{ $suppliers->Kategori_Supplier }}</td>
                                    <td>{{ $suppliers->NomorTelp }}</td>
                                    <td>{{ $suppliers->Metode_Pembayaran }}</td>
                                    <td><a href="/tampilkansupplier/{{ $suppliers->id }}" id="edit-delete-button"
                                            type="button" class="btn btn-primary"><img id="edit-icon"
                                                src="{{ asset('Icon/pen-solid.png') }}"> </td>
                                    <td><a href="/Hapussupplier/{{ $suppliers->id }}" type="submit"
                                            id="edit-delete-button" type="button" class="btn btn-danger"><img
                                                id="delete-icon" src="{{ asset('Icon/trash-solid.png') }}"></button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $supplier->links() }}

                </div>
            </div>

</body>

</html>
