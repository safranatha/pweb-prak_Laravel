<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StorebarangRequest;
use App\Http\Requests\UpdatebarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $barang = Barang::all();
    return view('Admin_Page.Stock_stockMasuk', ['barang' => $barang]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Staff_Page.Staff_Stock_Page");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebarangRequest $request)
    {
        Barang::create($request->all());
        return redirect()->back()->with('success', 'Penjualan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $barang = barang::find($id);
        // dd($data);
        return view('Admin_Page.EditForm_stockMasuk', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebarangRequest $request, $id)
    {
        $barang = barang::find($id);
        $barang -> update($request->all());
        return redirect()->route('barang.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang, $id)
    {
        $barang = barang::find($id);
        $barang->delete();
        return redirect()->back()->with('success', 'Barang berhasil dihapus');
    }


}
