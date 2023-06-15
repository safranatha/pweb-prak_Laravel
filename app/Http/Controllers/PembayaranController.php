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
        $pembayaran = pembayaran::all();
        return view('Admin_Page.Sales_Page', ['pembayaran' => $pembayaran]);
    }
}
