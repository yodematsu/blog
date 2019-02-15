<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \DB::table('users')->get();
        if(count($users) == 0){
            \DB::table('users')->insert([
                [
                    'name' => 'tomo',
                    'email' => 'mtforcontract@gmail.com',
                    'password' => \Hash::make('chekera0127'),
                ]
            ]);
        }
    }
}