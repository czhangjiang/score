<?php

class UserTableSeeder extends Seeder {

	public function run() 
	{
		User::create([
			'username' => 'super_man',
			'password' => Hash::make('a123456'),
			'nikename' => '超级管理员',
			'role'     => '99',
			'status'   => '0',
			'createtime' => time()
 		]);
	}
}