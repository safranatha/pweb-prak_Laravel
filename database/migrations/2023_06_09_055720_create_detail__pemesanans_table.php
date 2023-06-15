<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail__pemesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('pemesanan_id')->unsigned();
            $table->unsignedBigInteger('barang_id')->unsigned();
            $table->bigInteger('Jumlah_barang');
            $table->bigInteger('Harga_barang');

            $table->foreign('pemesanan_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail__pemesanans');
    }
};
