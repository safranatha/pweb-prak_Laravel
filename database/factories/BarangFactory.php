<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nama_barang'=>fake()->colorName(),
            'Kategori_barang'=>fake()->name(),
            'Jumlah_barang'=>fake()->randomNumber(),
            'Harga_barang'=>fake()->randomNumber(),
            'Tanggal'=>fake()->date(),
            'Supplier'=>fake()->name(),
        ];
    }
}
