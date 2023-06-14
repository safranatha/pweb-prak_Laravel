<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Http\Requests\StorePenjualanRequest;
use App\Http\Requests\UpdatePenjualanRequest;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Penjualan::query();
        $nama_keyword = $request->id;
        if (!empty($nama_keyword)) {
            $query->where('id', 'LIKE', "%$nama_keyword%");
        }
        /* $status_keyword = $request->Status;
        if (!empty($status_keyword)) {
            $query->where('Status', 'LIKE', "%$status_keyword%");
        } */
        $tanggal_keyword = $request->Tanggal;
        if (!empty($tanggal_keyword)) {
            $query->where('Date', 'LIKE', "%$tanggal_keyword%");
        }

        $penjualan = $query->paginate(10);
        // $penjualan = Penjualan::orderBy('Date', 'desc')->paginate(3);

        return view('Admin_Page.Sales_Page', ['penjualan' => $penjualan]);
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
        // dd($request->all());
        Penjualan::create($request->all());
        return redirect()->back()->with('success', 'Penjualan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        // dd($data);
        return view('Admin_Page.EditForm_Penjualan', compact('penjualan'));
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
    public function update(UpdatePenjualanRequest $request, $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->update($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan, $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
