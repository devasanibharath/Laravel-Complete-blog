<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Bharath\User;

class UserTableSeeder extends Seeder {

	public function run(){
		
		User::create(
			[
				'name' => 'John Doe',
				'email' => 'jdoe@mail.com',
				'username' => 'JonnyDonny',
				'password' => \Hash::make('secret')

			]
		);
	}

}