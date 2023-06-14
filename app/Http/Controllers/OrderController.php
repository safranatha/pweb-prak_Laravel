<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Barang;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Detail_Pemesanan;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Barang = Barang::all();
        return view('Staff_Page.Staff_SelectbarangOrder', ['barang' => $Barang]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {

        // Get the keranjang items from the session
        $keranjang = $request->session()->get('Keranjang', []);
        // Calculate the total price of the order
        $totalPrice = 0;
        foreach ($keranjang as $id => $item) {
            
            $totalPrice += $item['barang']->Harga_barang * $item['Jumlah_barang'];
        }

        // Create a new order and save it to the database
        $order = new Order();
        // $order->id_customer = $user->id;
        $order->total = $totalPrice;
        $order->save();

        // Loop through the items in the keranjang and create new order detail records
        foreach ($keranjang as $id => $item) {
            $barang = $item['barang'];

            // Create a new order detail record and save it to the database
            $orderDetail = new Detail_Pemesanan();
            $orderDetail->pemesanan_id = $order->id;
            $orderDetail->barang_id = $barang->id;
            $orderDetail->Jumlah_barang = $item['Jumlah_barang'];
            $orderDetail->Harga_barang = $barang->Harga_barang * $item['Jumlah_barang'];
            $orderDetail->save();
        }

        // Clear the keranjang items from the session
        $request->session()->forget('Keranjang');

        // Redirect to the order confirmation page
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
