<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin Esawit',
                'email' =>'admin@gmail.com',
                'password' => Hash::make('123qweasd'),
                'created_at' => Carbon::now(),
            ]
        ];
        User::insert($user);
    }
}
