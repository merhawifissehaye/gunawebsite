<?php

class ListController extends BaseController {

	public function index($id) {
		$page = Page::find($id);
		$list_blocks = $page->list_blocks()->get();
		return View::make('list/index')->with([
			'page' => $page,
			'list_blocks' => $list_blocks
		]);
	}
	public function edit_title( $id ) {
		$page = Page::find($id);
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make(Input::all(), [
				'title' => 'required'
			]);
			if( $validator->fails() )
				return Redirect::route('list_edit_title', $id)->withErrors($validator);
			$page->title = Input::get('title');
			$page->save();
			return Redirect::route('list', $id);
		}
		return View::make('list/edit_title')->with('page', $page);
	}

	public function add( $id ) {
		$page = Page::find($id);
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make(Input::all(), [
				'title' => 'required',
				'content' => 'required'
			]);
			if( $validator->fails() )
				return Redirect::route('list_add', $page->id);
			$list_block = new ListBlock;
			$list_block->page_id = $page->id;
			$list_block->title = Input::get('title');
			$list_block->content = Input::get('content');
			$list_block->save();
			return Redirect::route('list', $page->id);
		}
		return View::make('list/add')->with('page', $page);
	}

}
