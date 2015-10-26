<?php

class ListBlockController extends BaseController {

	public function edit( $id ) {
		$list_block = ListBlock::find($id);
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make(Input::all(), [
				'title' => 'required',
				'content' => 'required'
			]);
			if( $validator->fails() )
				return Redirect::route('list_block_edit', $id)->withErrors($validator);
			$list_block->title = Input::get('title');
			$list_block->content = Input::get('content');
			$list_block->save();
			return Redirect::route('list', $list_block->page()->firstOrFail()->id);
		}
		return View::make('list_block/edit')->with(
			'list_block', $list_block
		);
	}

}
