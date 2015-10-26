<?php

class GalleryBlockController extends BaseController {

	public function edit( $id ) {
		$gallery_block = GalleryBlock::find($id);
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make( Input::all(), [
				'title' => 'required',
				'content' => 'required'
			]);
			if( $validator->fails() )
				return Redirect::route('gallery_block_edit', $id)->withErrors($validator);
			$gallery_block->title = Input::get('title');
			$gallery_block->content = Input::get('content');
			$gallery_block->save();
			return Redirect::route('gallery', $gallery_block->page()->firstOrFail()->id);
		}
		return View::make('gallery_block/edit')->with('gallery_block', $gallery_block);
	}

}
