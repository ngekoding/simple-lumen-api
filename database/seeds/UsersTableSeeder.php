<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$hasher = app()->make('hash');

        DB::table('users')->delete();
        $user = app()->make('App\User');
        $user->fill([
        	'username' 	=> 'john',
        	'email'		=> 'john@doe.com',
        	'password'	=> $hasher->make('johndoe'),
        	'api_token'	=> sha1(time())
        ]);
        $user->save();
    }
}
