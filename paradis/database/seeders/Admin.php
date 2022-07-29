<?php

namespace Database\Seeders;

use App\Models\Bungalow;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'prenom' => 'Admin',
            'nom' => 'Admin',
            'telephone' => '02020202',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);

        User::insert([
            'prenom' => 'test',
            'nom' => 'test',
            'telephone' => '02002',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin' => 0,
        ]);

        Bungalow::insert([
            [
                'nom' => 'Bungalow 1',
                'description' => 'description du bungalow 1',
                'image' => 'public/bungalows/1DRSG8zxPJNb0tS3D4PLc3ke1HJHVFjAoEZnGOJz.jpg',
                'prix' => 1,
            ],
            [
                'nom' => 'Bungalow 2',
                'description' => 'description du bungalow 2',
                'image' => 'public/bungalows/5NDbb2c26aZOs790BRFlkEuIqpfDT16K9qbBXoSx.jpg',
                'prix' => 2,
            ],

            [
                'nom' => 'Bungalow 3',
                'description' => 'description du bungalow 3',
                'image' => 'public/bungalows/10d2uDWf5Y92WhviPkc9gL4HJoCA7cDsi2TYAoql.jpg',
                'prix' => 3,
            ],
        ]);

        Reservation::insert([
            [
                'user_id' => 1,
                'bungalow_id' => 1,
                'debut' => Carbon::now()->addDays(10),
                'fin' => Carbon::now()->addDays(15),
            ],
            [
                'user_id' => 1,
                'bungalow_id' => 1,
                'debut' => Carbon::now()->addDays(10),
                'fin' => Carbon::now()->addDays(15),
            ],
            [
                'user_id' => 2,
                'bungalow_id' => 1,
                'debut' => Carbon::now()->addDays(10),
                'fin' => Carbon::now()->addDays(15),
            ],
            [
                'user_id' => 1,
                'bungalow_id' => 2,
                'debut' => Carbon::now()->addDays(10),
                'fin' => Carbon::now()->addDays(15),
            ],
            [
                'user_id' => 1,
                'bungalow_id' => 2,
                'debut' => Carbon::now()->addDays(10),
                'fin' => Carbon::now()->addDays(15),
            ],
            [
                'user_id' => 2,
                'bungalow_id' => 2,
                'debut' => Carbon::now()->addDays(10),
                'fin' => Carbon::now()->addDays(15),
            ],
        ]);
    }
}
