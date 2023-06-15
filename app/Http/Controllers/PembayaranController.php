<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\pembayaran;
use Illuminate\Support\Carbon;
use App\Http\Requests\StorepembayaranRequest;
use App\Http\Requests\UpdatepembayaranRequest;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = Order::all();
        return view('Staff_Page.Staff_Payment', ['pemesanan' => $pemesanan]);
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
    public function store(StorepembayaranRequest $request)
    {

        $pemesananId = $request->input('pemesanan_id');

        $pembayaran = new Pembayaran();
        $pembayaran->pemesanan_id = $pemesananId;
        $pembayaran->status = 'Paid';
        $pembayaran->created_at = Now();
        $pembayaran->save();
        // return Redirect::route('adminView');
        return redirect()->route('pembayaran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(pembayaran $pembayaran)
    {

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepembayaranRequest $request, pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }

    public function Tampil(){
        $pembayaran = pembayaran::orderBy('created_at','desc')->get();
        return view('Admin_Page.Sales_Page', ['pembayaran' => $pembayaran]);
    }

    // $data= tes2Laravel::orderBy('Invoice_id','desc')->get();

    public function TampilPembayaran(){
            $pembayaran = Pembayaran::all();
            // $pemesanan = Order::with('products');
            // dd($pemesanan);
            /* $data = [];

            foreach ($pembayaran as $p) {
                $order = $p->Pemesanan;
                $details = $order->orderDetails;

                foreach ($details as $detail) {
                    $barangId = $detail->barang_id;
                    $data[] = $barangId;
                }
            }
            dd($data); */
            return view('Admin_Page.Stock_stockKeluar', ['pembayaran' => $pembayaran]);
    }
}
