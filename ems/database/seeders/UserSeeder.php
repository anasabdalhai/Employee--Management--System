<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'=>'anas',
            'email'=>'anas@gmail.com',
            'passWord'=>Hash::make('anas1234')

        ]);
         User::create([
            'name'=>'ali',
            'email'=>'ali@gmail.com',
            'passWord'=>Hash::make('aali1234')

        ]);
    }
}
