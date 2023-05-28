<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'Nama_Supplier','Alamat_Supplier','Kategori_Supplier','NomorTelp','Metode_Pembayaran']
            'Nama_Supplier'=>fake()->name(),
            'Alamat_Supplier'=>fake()->address(),
            'Kategori_Supplier'=>fake()->company(),
            // 'Metode_Pembayaran'=>fake()->boolean(),
            'NomorTelp'=>fake()->phoneNumber()
        ];
    }
}
