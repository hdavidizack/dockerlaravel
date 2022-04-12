<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'admin',
            'email'=>'hdavidizack@hotmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('admin');

        User::create([
            'name' =>'editor',
            'email'=>'editor@hotmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('editor');

        User::create([
            'name' =>'invitado',
            'email'=>'invitado@hotmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('invitado');
    }
}
