<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penjualan>
 */
class PenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Total'=>fake()->randomDigitNotNull(),
            'Date'=>fake()->date(),
            // 'Metode Pembayaran'=>fake()->boolean(),
            // 'Status Pembayaran'=>fake()->boolean()
        ];
    }
}
