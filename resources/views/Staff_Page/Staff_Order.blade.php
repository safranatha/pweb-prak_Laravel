<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/StaffOrder.css') }}">
    <link rel="icon" href="{{ asset('Image/Image/minimarket.png') }}">
    <title>Document</title>
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
                    <a href="{{ route('pembayaran.index') }}" class="d-flex align-items-center text-decoration-none text-light">
                        <img id="Home-Icon" class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Payment.svg') }}">
                        <span class="Desc-Menu text-dark">Pembayaran</span>
                    </a>
                </div>
                <div id="Dashboard-Menu"
                    class="py-3 bg-dark rounded-pill d-flex align-items-center justify-content-start menu-option mt-3">
                    <a href="{{ route('order.index') }}"
                        class="d-flex align-items-center text-decoration-none text-light">
                        <img id="Home-Icon" class="Icon-Nav bg-light ms-5 me-3"
                            src="{{ asset('Image/Vector/Payment.svg') }}">
                        <span class="Desc-Menu text-light">Pemesanan</span>
                    </a>
                </div>
                <div id="Payment-Menu" class="py-3 menu-option">
                    <a href="{{ route('StaffStock') }}" class="d-flex align-items-center text-decoration-none">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Stuff.svg') }}">
                        <span class="text-dark">Penerimaan barang</span>
                    </a>
                </div>

                <div id="Akun-Menu" class="py-3 menu-option mt-4 d-flex align-items-center rounded-pill">
                    <a href="{{ route('StaffSupplier') }}" class="d-flex align-items-center text-decoration-none ">
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/Supplier.svg') }}">
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
                        <img class="Icon-Nav ms-5 me-3" src="{{ asset('Image/Vector/SignOut.svg') }}">
                        <span class="text-dark">Sign Out</span>
                    </a>
                </div>
            </div>


            <div id="main-content"
                class="col w-50 d-flex flex-column justify-content-center align-items-center mb-5 mt-5">

                <h4 class="text-center">Order Barang</h4>
                <section class="Keranjang bg-light w-100 row-cols-2">

                    <div class="Keranjang-content row row-cols-4 w-100" id="Keranjang-content">
                        @if (isset($Keranjang))
                            @foreach ($Keranjang as $id => $item)
                                <div class="Keranjang-box mt-5 mx-5 col">
                                    <div class="detail-box">
                                        <h2 class="Keranjang-barang-title mb-3">{{ $item['barang']->Nama_barang }}</h2>
                                        <div class="Keranjang-harga mb-3">Rp {{ $item['barang']->Harga_barang }}</div>
                                        <input type="text" name="id" value="{{ $item['barang']->id }}" hidden>
                                        <div class="Jumlah_barang-container">
                                            <input type="number" name="Jumlah_barang" id="Jumlah_barang" min="1"
                                                value="{{ $item['Jumlah_barang'] }}" class="Keranjang-Jumlah_barang"
                                                readonly>
                                            <div class="input-plus-minus">
                                                <form action="{{ route('StaffKurangQuantity') }}" method="POST">
                                                    @csrf
                                                    {{-- @method('put') --}}
                                                    <input type="text" name="id"
                                                        value="{{ $item['barang']->id }}" hidden>
                                                    <button
                                                        class="Jumlah_barang-btn minus-btn btn btn-danger text-light"
                                                        type="submit">-</button>
                                                </form>
                                                <form action="{{ route('StaffTambahQuantity') }}" method="POST">
                                                    @csrf
                                                    {{-- @method('put') --}}
                                                    <input type="text" name="id"
                                                        value="{{ $item['barang']->id }}" hidden>
                                                    <button
                                                        class="Jumlah_barang-btn plus-btn btn btn-success text-light"
                                                        type="submit">+</button>
                                                </form>
                                                <form action="{{ route('StaffKeranjangDelete') }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="text" name="id" value="{{ $item['barang']->id }}" hidden>
                                                    <button class="remove-Keranjang btn btn-danger text-light"
                                                        type="submit">Hapus</button>
                                                </form>


                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p style="font-size: 20px" class="text-center">Tidak ada Barang Yang Dipesan</p>
                        @endif
                    </div>
                    <div class="total">
                        <div class="total-title mt-5 mx-5">Total Biaya</div>
                        @if (isset($Keranjang))
                            <div class="total-harga mx-5" name="total" id="total-harga">Rp
                                {{ array_sum(array_map(function ($item) {return $item['barang']->Harga_barang * $item['Jumlah_barang'];}, $Keranjang)) }}
                            </div>
                        @else
                            <div class="total-harga mx-5" id="total-harga">Rp 0</div>
                        @endif
                    </div>
                    <div class="cancel-buy-btn mt-5 w-100">
                        <div class="heading row btn btn-primary btn-lg mx-2">
                            <a class="text-light text-decoration-none" href="{{ route('order.index') }}">Tambah Order
                                Lain</a>
                        </div>
                        <form action="{{ route('StaffOrderStore') }}" method="post">
                            @csrf
                            <button class="all-btn order-btn btn btn-success text-light" type="submit">Add</button>
                        </form>
                    </div>
                </section>
</body>

</html>
