<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => "Pesi Pesi",
            'email' => 'pesi.teice@gmail.com',
            'password' => Hash::make('teiceislam111'),
            'usertype' => 'admin',
            'email_verified_at' => '2024-06-02 12:17:47',
        ]);
    }
}
