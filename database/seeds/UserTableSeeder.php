<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        	'name'=>'Ana Maria',
        	'email'=>'anamaria@gmail.com',
        	'password'=>bcrypt('123'),
        ]);

        User::create([

        	'nome'=> 'Jose Joao';
        	'email'=>'josejoao@gmail.com',
        	'password'=>bcrypt('456')
        ]);
    }
}
