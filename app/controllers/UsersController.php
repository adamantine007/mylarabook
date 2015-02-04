<?php

use Larabook\Users\UserRepository;

class UsersController extends \BaseController {

	protected $userRepository;

	/**
	 * @param UserRepository $userRepository
     */
	function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->userRepository->getPaginated(10);

		return View::make('users.index')->withUsers($users);
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		$user = $this->userRepository->findByUsername($username);

		return View::make('users.show')->withUser($user);
	}
}
