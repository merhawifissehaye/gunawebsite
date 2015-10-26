<?php

class ListBlockSeeder extends DatabaseSeeder {

	public function run()
	{
		$list_blocks = [
			[
				'page_id' => 1,
				'title' => 'Establishement',
                'content' => 'Guna Trading House PLC is a private limited company established according to the Ethiopian Commercial Code 510ff in 1992 G.C.  The Company is legally registered as “GUNA TRADING HOUSE PRIVATE LIMITED COMPANY” and its trade mark is protected in the Ethiopian Patent Authority, certificate no. 4653 with paid up capital of USD 10 million and with an average annual turnover of USD 100 million. The Company has about 300 qualified and experienced permanent employees.  Its head quarter is located in Addis Ababa Gerji, behind the Jackros Residential Units, Bole Sub City, kebele 14/15.'
			]
		];

		foreach( $list_blocks as $list_block )
			ListBlock::create($list_block);

	}

}
