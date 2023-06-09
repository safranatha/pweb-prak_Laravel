<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['Nama_barang','Jumlah_barang','Kategori_barang','Harga_barang','Tanggal','Supplier'];

    public function orderDetails() {
        return $this->hasMany(Detail_Pemesanan::class);
    }

    /* public function user() {
        return $this->belongsTo(User::class);
    } */

}
