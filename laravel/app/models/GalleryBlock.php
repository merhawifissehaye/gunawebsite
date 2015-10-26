<?php

class GalleryBlock extends Eloquent {

	protected $table = 'gallery_blocks';

	public function page() {
		return $this->belongsTo('Page');
	}

}
