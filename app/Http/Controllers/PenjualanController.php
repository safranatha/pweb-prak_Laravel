<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Http\Requests\StorePenjualanRequest;
use App\Http\Requests\UpdatePenjualanRequest;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::orderBy('Date','desc')->paginate(3);
        
        return view('Admin_Page.Sales_Page',['penjualan' => $penjualan]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Staff_Page.Staff_Payment");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjualanRequest $request)
    {
        // $data=[
        //     // 'Invoice_id'=>$request->Invoice_id,
            
        // ];
        Penjualan::create($request->all());
        return redirect()->back()->with('success', 'Penjualan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjualanRequest $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
