<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Staff_Page.Staff_Order', [
            'Keranjang' => session()->get('Keranjang')
        ]);
    }

    public function add(Request $request)
    {

        $request->validate([
            'id' => 'required'
        ]);

        $id = $request->get('id');

        $barang = Barang::find($id);
        $Keranjang = session()->get('Keranjang');
        if (!$Keranjang) {
            $Keranjang = [];
        }
        if (isset($Keranjang[$id])) {
            $Keranjang[$id]['Jumlah_barang']++;
        } else {
            $Keranjang[$id] = [
                'barang' => $barang,
                'Jumlah_barang' => 1
            ];
        }
        session()->put('Keranjang', $Keranjang);
        return redirect()->route('StaffOrder');
    }

    public function update(Request $request)
    {
        $Keranjang = session()->get('Keranjang');

        $id = $request->get('id');
        $Jumlah_barang = $request->get('Jumlah_barang');

        if ($Jumlah_barang > 0) {
            $Keranjang[$id]['Jumlah_barang'] = $Jumlah_barang;
            session()->put('Keranjang', $Keranjang);
        } else {
            unset($Keranjang[$id]);
            session()->put('Keranjang', $Keranjang);
        }

        return redirect('StaffOrder');
    }

    public function plus(Request $request)
    {
        $Keranjang = session()->get('Keranjang');

        $id = $request->get('id');
        $Jumlah_barang = $Keranjang[$id]['Jumlah_barang'] + 1;

        if ($Jumlah_barang > 0) {
            $Keranjang[$id]['Jumlah_barang'] = $Jumlah_barang;
            session()->put('Keranjang', $Keranjang);
        } else {
            unset($Keranjang[$id]);
            session()->put('Keranjang', $Keranjang);
        }

        return redirect()->route('StaffOrder');
    }

    public function minus(Request $request)
    {
        $Keranjang = session()->get('Keranjang');

        $id = $request->get('id');
        if(isset($Keranjang[$id])){
            $Jumlah_barang = $Keranjang[$id]['Jumlah_barang'] - 1;
            if ($Jumlah_barang > 0) {
                $Keranjang[$id]['Jumlah_barang'] = $Jumlah_barang;
                session()->put('Keranjang', $Keranjang);
            } else {
                unset($Keranjang[$id]);
                session()->put('Keranjang', $Keranjang);
            }
        };

        return redirect()->route('StaffOrder');
    }

    public function delete(Request $request)
    {
        $Keranjang = session()->get('Keranjang');

        $id = $request->get('id');

        if (isset($Keranjang[$id])) {
            unset($Keranjang[$id]);
            session()->put('Keranjang', $Keranjang);
        }


        return redirect()->route('StaffOrder');
    }

}
