<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Barang;
use App\Models\Detail_Pemesanan;
use App\Http\Requests\StoreDetail_PemesananRequest;
use App\Http\Requests\UpdateDetail_PemesananRequest;

class DetailPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DetailPemesanan = Detail_Pemesanan::all();

        return view('Staff_Page.Staff_DetailPayment', ['DetailPemesanan', $DetailPemesanan]);
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
    public function store(StoreDetail_PemesananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail_Pemesanan $detail_Pemesanan, $id)
    {
        /* $detail_Pemesanan = Detail_Pemesanan::find($id);
         $detailPemesanan = Detail_Pemesanan::where('pemesanan_id', $id)->pluck('barang_id')->toArray();
         $totalPemesanan = Order::where('id', $id)->value('total');
         return view('Staff_Page.Staff_DetailPayment',['Pemesanan'=> $detailPemesanan,'DetailPemesanan'=> $detail_Pemesanan,'total'=>$totalPemesanan]); */

        $detail_Pemesanan = Detail_Pemesanan::find($id);
        $detailPemesanan = Detail_Pemesanan::where('pemesanan_id', $id)->pluck('Jumlah_barang', 'barang_id')->toArray();
        $totalPemesanan = Order::where('id', $id)->value('total');
        return view('Staff_Page.Staff_DetailPayment', [
            'Pemesanan' => $detailPemesanan,
            'DetailPemesanan' => $detail_Pemesanan,
            'total' => $totalPemesanan
        ]);


        // return view('Staff_Page.Staff_DetailPayment',['DetailPemesanan'=> $detail_Pemesanan]);
        /* $detail_Pemesanan = Detail_Pemesanan::find($id);
        dd($detail_Pemesanan);
        if($detail_Pemesanan){
            $barangId = $detail_Pemesanan->pluck('barang_id')->toArray();
        }
        $barang = Barang::find($barangId);
       /*  $orderDetails = $barang->orderDetails;
        dd($orderDetails);

        return view('Staff_Page.Staff_DetailPayment', [
            'DetailPemesanan' => $detail_Pemesanan,
        ]);*/
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail_Pemesanan $detail_Pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetail_PemesananRequest $request, Detail_Pemesanan $detail_Pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail_Pemesanan $detail_Pemesanan)
    {
        //
    }
}
