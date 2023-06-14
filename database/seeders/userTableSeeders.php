<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* DB::table('users')->insert([
            'username'=>'admin3',
            'email'=>'email3@gmail.com',
            'password'=>Hash::make('pass12345678')
        ]
        ); */
        User::factory()->count(5)->create();
    }
}
