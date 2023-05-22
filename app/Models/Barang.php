<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['Nama_barang','Jumlah_barang','Kategori_barang','Tanggal','Supplier'];

}
