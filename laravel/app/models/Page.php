<?php

class Page extends Eloquent {

	protected $table = 'pages';

	public function list_blocks() {
		return $this->hasMany('ListBlock');
	}

	public function gallery_blocks() {
		return $this->hasMany('GalleryBlock');
	}

}
