<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ['usern'=>'admin','password'=>Hash::make('nopass123'),'address'=>'home','role'=>'admin'],
            ['usern'=>'mygalaxy2712','password'=>Hash::make('nopass123'),'address'=>'home','role'=>'user'],
        ]);
    }
}
