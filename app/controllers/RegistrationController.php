<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;

class RegistrationController extends BaseController {


	/**
	 * @var RegistrationForm
	 */
	private $registrationForm;

	/**
	 * @param RegistrationForm $registrationForm
	 */
	function __construct(RegistrationForm $registrationForm) {
		$this->registrationForm = $registrationForm;

		$this->beforeFilter('guest');
	}


	/**
	 * Show the form for registration a new user.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('registration.create');
	}


	/**
	 * @return mixed
	 * @throws \Laracasts\Validation\FormValidationException
     */
	public function store() {

		$this->registrationForm->validate(Input::all());

//		extract(Input::only('username', 'email', 'password'));
//
//		$user = $this->execute(
//			new RegisterUserCommand($username, $email, $password
//		));

		$user = $this->execute(RegisterUserCommand::class);

		Auth::login($user);

		Flash::message('Welcome to Larabook - my first website!');

		return Redirect::home();
	}

}
