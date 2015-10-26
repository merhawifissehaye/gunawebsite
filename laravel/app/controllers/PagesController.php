<?php

class PagesController extends BaseController {

	public function index() {
		return View::make('pages/index');
	}
	public function about() {
		$page = Page::where('route', '=', Route::currentRouteName())->firstOrFail();
		$list_items = ListBlock::where('page_id', '=', $page->id)->get();
		return View::make('list/index')->with([
			'page' => $page,
			'list_items' => $list_items
		]);
	}
	public function how() {
		return View::make('pages/how');
	}
	public function organization() {
		return View::make('pages/organization');
	}
	public function management() {
		return View::make('pages/management');
	}
	public function laws() {
		return View::make('pages/laws');
	}
	public function board() {
		return View::make('pages/board');
	}
	public function agency() {
		return View::make('pages/agency');
	}
	public function corporate() {
		return View::make('pages/corporate');
	}
	public function export() {
		return View::make('pages/export');
	}
	public function import() {
		return View::make('pages/import');
	}
	public function local() {
		return View::make('pages/local');
	}
	public function commission() {
		return View::make('pages/commission');
	}
	public function current() {
		return View::make('pages/current');
	}
	public function reference() {
		return View::make('pages/reference');
	}
	public function market() {
		return View::make('pages/market');
	}
	public function order() {
		return View::make('pages/order');
	}
	public function latest() {
		return View::make('pages/latest');
	}
	public function press() {
		return View::make('pages/press');
	}
	public function blog() {
		return View::make('pages/blog');
	}
	public function events() {
		return View::make('pages/events');
	}
	public function brochure() {
		return View::make('pages/brochure');
	}
	public function newsletter() {
		return View::make('pages/newsletter');
	}
	public function briefs() {
		return View::make('pages/briefs');
	}
	public function articles() {
		return View::make('pages/articles');
	}
	public function tender() {
		return View::make('pages/tender');
	}
	public function careers() {
		return View::make('pages/careers');
	}
	public function contact() {
		return View::make('pages/contact');
	}
}
