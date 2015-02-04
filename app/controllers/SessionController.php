<?php

use Larabook\Forms\SignInFrm;

class SessionController extends \BaseController {

	/**
	 * @var SignInFrm
	 */
	private $signInForm;

	function __construct(SignInFrm $signInForm)
	{
		$this->beforeFilter('guest', ['except' => 'destroy']);
		$this->signInForm = $signInForm;
	}



	/**
	 * Show the form for signing in.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::only('email', 'password');

		$this->signInForm->validate($input);

		if (! Auth::attempt($input)) {

			Flash::message('We were unable to sign you in. Please, check your credentials and try again.');

			return Redirect::back();

		} else {

			Flash::message('Welcome back!');

			return Redirect::intended('statuses');
		}
	}


	/**
	 * @return mixed
     */
	public function destroy()
	{
		//
		Auth::logout();

		Flash::message("Logging out...");

		return Redirect::home();
	}


}
