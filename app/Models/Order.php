<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total'];

    public function orderDetails() {
        return $this->hasMany(Detail_Pemesanan::class);
    }

    public function pembayaran(){
        return $this->hasOne(pembayaran::class);
    }
    /* public function user() {
        return $this->belongsTo(User::class);
    } */
}
