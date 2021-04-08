<?php

use App\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Administrator',
            'email'=>'admin@mucouh.com',
            'password'=>bcrypt('s3cret'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name'=>'Julius Junior Kazibwe',
            'email'=>'kazibwejuliusjunior@gmail.com',
            'password'=>bcrypt('s3cret'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
