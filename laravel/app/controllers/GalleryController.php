<?php

class GalleryController extends BaseController {

	public function index($id) {
		$page = Page::find($id);
		if( $page->type != 'gallery' ) {
			echo 'The page is not gallery';
			return;
		}
		$gallery_blocks = $page->gallery_blocks()->get();
		return View::make('gallery/index')->with([
			'page' => $page,
			'gallery_blocks' => $gallery_blocks
		]);
	}

	public function add($id) {
		$page = Page::find($id);
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make(Input::all(), [
				'title' => 'required',
				'content' => 'required'
			]);
			if( $validator->fails() )
				return Redirect::route('gallery_add', $id)->withErrors($validator)->withInput(Input::all());
			$gallery_block = new GalleryBlock;
			$gallery_block->title = Input::get('title');
			$gallery_block->page_id = $id;
			$gallery_block->content = Input::get('content');
			$gallery_block->save();
			return Redirect::route('gallery', $id);
		}
		return View::make('gallery/add')->with('page', $page);
	}

	public function edit( $id ) {
		$page = Page::find($id);
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make( Input::all(), [
				'title' => 'required',
				'description' => 'required'
			]);
			if( $validator->fails() )
				return Redirect::route('gallery_edit', $page->id)->withErrors($validator);
			$page->title = Input::get('title');
			$page->description = Input::get('description');
			$page->save();
			return Redirect::route('gallery', $page->id);
		}
		return View::make('gallery/edit')->with([
			'page' => $page,
		]);
	}

	public function edit_gallery_block( $id ) {
		$gallery_block = GalleryBlock::find($id);
		return View::make('gallery_block/edit')->with('gallery_block', $gallery_block);
	}

	public function ajax() {
		if( Request::ajax() ) {
			$file = Input::file('file');
			$filename = $file->getClientOriginalName();
			$file->move('uploads/', $filename);
			return URL::asset('uploads/').'/'.$filename;
		}
	}

}
