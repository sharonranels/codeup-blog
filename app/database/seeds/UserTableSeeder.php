<?php

class UserTableSeeder extends Seeder {
	
	public function run()
	{

		DB::table('users')->delete();

		$user = new User();
		$user->email = 'sharonranels@yahoo.com';
		$user->password = 'Dumas060863';
		$user->first_name = 'sharon';
		$user->last_name = 'ranels';
		$user->admin = 'y';
		$user->save();

		// $user1 = new User();
		// $user1->email = 'john@doe.com';
		// $user1->password = 'codeup';
		// $user1->first_name = 'john';
		// $user1->last_name = 'doe';
		// $user1->admin = 'n';
		// $user1->save();
	}

}