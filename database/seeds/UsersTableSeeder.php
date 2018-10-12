<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array('name'=>'John','email'=>'John@mail.com','password'=>bcrypt('password')));
        User::create(array('name'=>'Den','email'=>'den@mail.com','password'=>bcrypt('password')));
    }
}
