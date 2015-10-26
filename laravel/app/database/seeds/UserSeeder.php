<?php

class UserSeeder extends DatabaseSeeder {

	public function run()
	{
		$users = [
			[
				'email' => 'atsbha@gthplc.com',
				'password' => Hash::make('atsbha'),
				'role' => 'admin'
			],
			[
				'email' => 'tirhasg@gthplc.com',
				'password' => Hash::make('tirhasg')
			],
			[
				'email' => 'amanuelk@gthplc.com',
				'password' => Hash::make('amanuelk')
			],
			[
				'email' => 'abebeb@gthplc.com',
				'password' => Hash::make('abebeb')
			],
			[
				'email' => 'neguseg@gthplc.com',
				'password' => Hash::make('neguseg')
			],
			[
				'email' => 'adugnaa@gthplc.com',
				'password' => Hash::make('adugnaa')
			]
		];

		foreach( $users as $user )
			User::create( $user );

	}

}
