<?php

namespace Database\Seeders;

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

        Reservation::insert([
            [
                'user_id' => 1,
                'bungalow_id' => 1,
                'debut' =>  Carbon::now()->addDays(5)->toDateTimeString(),
                'fin' =>  Carbon::now()->addDays(6)->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'bungalow_id' => 1,
                'debut' =>  Carbon::now()->addDays(10)->toDateTimeString(),
                'fin' =>  Carbon::now()->addDays(11)->toDateTimeString(),
            ],
            [
                'user_id' => 2,
                'bungalow_id' => 1,
                'debut' =>  Carbon::now()->addDays(16)->toDateTimeString(),
                'fin' =>  Carbon::now()->addDays(18)->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'bungalow_id' => 2,
                'debut' =>  Carbon::now()->addDays(5)->toDateTimeString(),
                'fin' =>  Carbon::now()->addDays(6)->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'bungalow_id' => 2,   
                'debut' =>  Carbon::now()->addDays(11)->toDateTimeString(),
                'fin' =>  Carbon::now()->addDays(15)->toDateTimeString(),
            ],
            [
                'user_id' => 2,
                'bungalow_id' => 2,
                'debut' =>  Carbon::now()->addDays(16)->toDateTimeString(),
                'fin' =>  Carbon::now()->addDays(17)->toDateTimeString(),
            ],
        ]);
    }
}
