<?php

class ListBlock extends Eloquent {

	protected $table = 'list_blocks';

	public function page() {
		return $this->belongsTo('Page');
	}

}
