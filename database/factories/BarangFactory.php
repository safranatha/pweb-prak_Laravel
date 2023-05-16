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
            'Nama_barang'=>fake()->String(),
            'Kategori_barang'=>fake()->String(),
            'Jumlah_barang'=>fake()->String(),
            'Tanggal'=>fake()->date(),
            'Supplier'=>fake()->String(),
        ];
    }
}
