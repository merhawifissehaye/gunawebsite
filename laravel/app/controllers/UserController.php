<?php

use Illuminate\Support\MessageBag;

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit_email()
	{
		//
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make( Input::all(), [
				'email' => 'required | email'
			]);
			if( $validator->fails() )
				return Redirect::route('change_email')->withErrors($validator);
			Auth::user()->email = Input::get('email');
			Auth::user()->save();
			return Redirect::to('/');
		}
		return View::make('users/change_email');
	}

	public function edit_password()
	{
		//
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make( Input::all(), [
				'password' => 'required | confirmed'
			]);
			if( $validator->fails() )
				return Redirect::route('change_password')->withErrors($validator);
			Auth::user()->password = Hash::make(Input::get('password'));
			Auth::user()->save();
			return Redirect::to('/');
		}
		return View::make('users/change_password');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function login()
	{
		if( Auth::check() ) return Redirect::to('/');
		if( Input::server('REQUEST_METHOD') == 'POST' ) {
			$validator = Validator::make( Input::all(), [
				'email' => 'required | exists:users',
				'password' => 'required'
			]);
			if( $validator->fails() )
				return Redirect::route('login')->withErrors($validator);
			if( Auth::attempt([
				'email' => Input::get('email'),
				'password' => Input::get('password')
			]))
				return Redirect::intended();
			else {
				$errors = new MessageBag([
					'password' => [
						'mismatch' => 'Email and Password don\'t match'
					]
				]);
				return Redirect::route('login')->with('errors', $errors);
			}
		}
		return View::make('users/login');
	}


}
