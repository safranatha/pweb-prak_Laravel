<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['Nama_Supplier','Alamat_Supplier','Kategori_Supplier','NomorTelp','Metode_Pembayaran'];
}
