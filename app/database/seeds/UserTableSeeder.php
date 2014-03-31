<?php

class UserTableSeeder extends Seeder {
	
	public function run()
	{

		DB::table('users')->delete();

		$user = new User();
		$user->email = 'sharonranels@yahoo.com';
		$user->password = Hash::make('codeup');
		$user->save();
	}

}