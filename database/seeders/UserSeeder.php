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
            'name'=>'Cristhian Efrain',
            'email'=>'qwe@qwe',
            'profile'=>'https://i.pinimg.com/564x/91/9a/67/919a6724c8d20b671cdaaa6fd2966b8b.jpg',
            'password'=>'12345678',
        ]);
       

        User::factory(5)->create();
    }
}
