<?php

class PageSeeder extends DatabaseSeeder {

	public function run()
	{
		$pages = [
			[
				'title' => 'Tender',
				'type' => 'list',
				'route' => 'tender',
			]
		];

		foreach( $pages as $page )
			Page::create( $page );

	}

}
