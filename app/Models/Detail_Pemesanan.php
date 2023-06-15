<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail_Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemesanan_id',
        'barang_id',
        'Jumlah_barang',
        'ProductsPrice'
    ];

    public function parentOrder() {
        return $this->belongsTo(Order::class);
    }

    public function product() {
        return $this->belongsTo(Barang::class);
    }

}
