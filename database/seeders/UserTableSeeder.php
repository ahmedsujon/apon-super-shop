<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $getSUser = User::where('username', 'sadax_pos')->first();
        if (!$getSUser) {
            $user = new User();
            $user->surname = 'Sadax';
            $user->first_name = 'Sadax';
            $user->last_name = 'POS';
            $user->username = 'sadax_pos';
            $user->email = 'sadaxpos@gmail.com';
            $user->password = Hash::make('12345678');
            $user->business_id = 1;
            $user->language = 'en';
            $user->save();
        }
    }
}
