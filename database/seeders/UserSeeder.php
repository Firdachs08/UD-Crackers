<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name'=> 'Admin Amplang',
        'level'=> '1',
        'email'=> 'fbyanggraini@gmail.com',
        'password' => 'Firda',
        'remember_token' => Str::random(60),
        ]);
        //
    }
}
