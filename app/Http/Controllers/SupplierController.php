<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('Admin_Page.Supplier', ['supplier' => $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Staff_Page.Staff_Supplier");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request)
    {
        Supplier::create($request->all());
        return redirect()->back()->with('success', 'Supplier berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $supplier = Supplier::find($id);
        // dd($data);
        return view('Admin_Page.EditForm_Supplier', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier -> update($request->all());
        return redirect()->route('supplier.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect()->back()->with('success', 'suppl$supplier berhasil dihapus');
    }
}
