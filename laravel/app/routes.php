<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'as' => 'home',
	'uses' => 'PagesController@index'
));
Route::get('about', array(
	'as' => 'about',
	'uses' => 'PagesController@about'
));
Route::get('how', array(
	'as' => 'how',
	'uses' => 'PagesController@how'
));
Route::get('organization', array(
	'as' => 'organization',
	'uses' => 'PagesController@organization'
));
Route::get('management', array(
	'as' => 'management',
	'uses' => 'PagesController@management'
));
Route::get('laws', array(
	'as' => 'laws',
	'uses' => 'PagesController@laws'
));
Route::get('board', array(
	'as' => 'board',
	'uses' => 'PagesController@board'
));
Route::get('agency', array(
	'as' => 'agency',
	'uses' => 'PagesController@agency'
));
Route::get('corporate', array(
	'as' => 'corporate',
	'uses' => 'PagesController@corporate'
));
Route::get('export', array(
	'as' => 'export',
	'uses' => 'PagesController@export'
));
Route::get('import', array(
	'as' => 'import',
	'uses' => 'PagesController@import'
));
Route::get('local', array(
	'as' => 'local',
	'uses' => 'PagesController@local'
));
Route::get('commission', array(
	'as' => 'commission',
	'uses' => 'PagesController@commission'
));
Route::get('current', array(
	'as' => 'current',
	'uses' => 'PagesController@current'
));
Route::get('reference', array(
	'as' => 'reference',
	'uses' => 'PagesController@reference'
));
Route::get('market', array(
	'as' => 'market',
	'uses' => 'PagesController@market'
));
Route::get('order', array(
	'as' => 'order',
	'uses' => 'PagesController@order'
));
Route::get('latest', array(
	'as' => 'latest',
	'uses' => 'PagesController@latest'
));
Route::get('press', array(
	'as' => 'press',
	'uses' => 'PagesController@press'
));
Route::get('blog', array(
	'as' => 'blog',
	'uses' => 'PagesController@blog'
));
Route::get('events', array(
	'as' => 'events',
	'uses' => 'PagesController@events'
));
Route::get('brochure', array(
	'as' => 'brochure',
	'uses' => 'PagesController@brochure'
));
Route::get('newsletter', array(
	'as' => 'newsletter',
	'uses' => 'PagesController@newsletter'
));
Route::get('briefs', array(
	'as' => 'briefs',
	'uses' => 'PagesController@briefs'
));
Route::get('articles', array(
	'as' => 'articles',
	'uses' => 'PagesController@articles'
));
Route::get('tender', array(
	'as' => 'tender',
	'uses' => 'PagesController@tender'
));
Route::get('careers', array(
	'as' => 'careers',
	'uses' => 'PagesController@careers'
));
Route::get('contact', array(
	'as' => 'contact',
	'uses' => 'PagesController@contact'
));

Route::any('login', array(
	'as' => 'login',
	'uses' => 'UserController@login'
));

Route::any('user/email', array(
	'as' => 'change_email',
	'uses' => 'UserController@edit_email'
));

Route::any('user/password', array(
	'as' => 'change_password',
	'uses' => 'UserController@edit_password'
));

Route::get('logout', function() {
	Auth::logout();
	return Redirect::intended();
});

# ************* LIST **************** #
Route::get('list/{id}', array(
	'as' => 'list',
	'uses' => 'ListController@index'
))->where('id', '[0-9]+');

Route::any('list/{id}/edit/title', array(
	'before' => 'auth',
	'as' => 'list_edit_title',
	'uses' => 'ListController@edit_title'
))->where('id', '[0-9]+');

Route::any('list/{id}/add', array(
	'before' => 'auth',
	'as' => 'list_add',
	'uses' => 'ListController@add'
))->where('id', '[0-9]+');

Route::any('list_block/{id}/edit', array(
	'before' => 'auth',
	'as' => 'list_block_edit',
	'uses' => 'ListBlockController@edit'
))->where('id', '[0-9]+');
# ************* END LIST **************** #

# ************* GALLERY **************** #
Route::get('gallery/{id}', array(
	'as' => 'gallery',
	'uses' => 'GalleryController@index'
))->where('id', '[0-9]+');

Route::any('gallery/{id}/edit', array(
	'before' => 'auth',
	'as' => 'gallery_edit',
	'uses' => 'GalleryController@edit'
))->where('id', '[0-9]+');

Route::any('gallery/{id}/add', [
	'before' => 'auth',
	'as' => 'gallery_add',
	'uses' => 'GalleryController@add'
])->where('id', '[0-9]+');

Route::any('gallery/ajax', array(
	'before' => 'auth',
	'as' => 'gallery_ajax',
	'uses' => 'GalleryController@ajax'
));

# ************* END GALLERY **************** #

# ************* GALLERY BLOCK **************** #

Route::any('gallery_block/{id}/edit', array(
	'before' => 'auth',
	'as' => 'gallery_block_edit',
	'uses' => 'GalleryBlockController@edit'
));

# ************* END GALLERY BLOCK **************** #

# ************* ORDER PRODUCT **************** #
Route::any('product/add', array(
	'as' => 'add_product',
	'uses' => 'ProductController@create'
));
Route::any('create_page', array(
	'as' => 'create_page', 'before' => 'auth',
	function() {
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make( Input::all(), [
				'title' => 'required',
				'type' => 'required | in:list,gallery',
			]);
			if( $validator->fails() ) return Redirect::route('create_page')->withErrors($validator);
			$page = new Page;
			$page->title = Input::get('title');
			$page->type = Input::get('type');
			$page->description = Input::get('description');
			$page->save();
			return Redirect::route('create_page')->with('message', 'Page '.$page->title.' Created Successfully');
		}
		return View::make('create_page');
	}
));
# ************* END ORDER PRODUCT **************** #
Route::group(['before' => 'auth'], function() {
	Route::get('/static/edit/{id}', function($id) {
		$static = StaticModel::find($id);
		if( !$static ) App::abort(404);
		return View::make('statics.edit')->with('static', $static);
	})->where('id', '[0-9]+');
	Route::post('/static/edit/{id}', function($id) {
		$static = StaticModel::find($id);
		if( !$static ) App::abort(404);

		$validator = Validator::make( Input::all(), [
			'title' => 'required',
			'content' => 'required'
		]);
		if( $validator->fails() )
			return Redirect::to('/static/edit/'.$id)->withErrors($validator);
		$static->title = Input::get('title');
		$static->content = Input::get('content');
		$static->save();
		return Redirect::to('/')->with('message', 'Static Content Saved');
	});
});

Route::get('/permissions', ['before' => 'auth', function() {
	if( Auth::user()->role != 'admin' )
		App::abort(404);
	return View::make('account.permissions');
}]);

Route::get('/permissions/{id}', ['before' => 'auth', function($id) {
	if( Auth::user()->role != 'admin' )
		App::abort(404);
	$user = User::find($id);
	if( !$user ) App::abort(404);
	return View::make('account.permission_user')
		->with([ 'user' => $user ]);
}])->where('id', '[0-9]+');;

Route::post('/permissions/{id}', ['before' => 'auth', function($id) {
	if( Auth::user()->role != 'admin' )
		App::abort(404);
	$user = User::find($id);
	if( !$user ) App::abort(404);
	$input_pages = Input::get('pages');
	if( !empty($input_pages))
		foreach( Input::get('pages') as $page ) {
			if( !$user->pages->contains( $page )) {
				$user->pages()->attach($page);
			}
		}
	foreach( $user->pages()->get() as $page ) {
		if( !empty( $input_pages )) {
			if( !in_array($page->id, Input::get( 'pages' )))
				$user->pages()->detach($page->id);
		}
		else $user->pages()->detach();
	}

	return Redirect::to('/permissions')->with('message', 'Permissions set');

}])->where('id', '[0-9]+');

App::missing( function( $exception ) {
	return Response::view('errors.missing', array(), 404);
});
