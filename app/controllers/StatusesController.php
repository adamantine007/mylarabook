<?php

use Illuminate\Support\Facades\Auth;
use Larabook\Forms\PublishStatusForm;
use Larabook\Forms\PublishStatusFormStatusRepository;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;

class StatusesController extends \BaseController {


	protected $statusRepository;
	/**
	 * @var PublishStatusForm
	 */
	protected $publishStatusForm;

	/**
	 * @param PublishStatusForm $publishStatusForm
	 * @param StatusRepository $statusRepository
	 */
	function __construct(PublishStatusForm $publishStatusForm, StatusRepository $statusRepository)
	{
		$this->statusRepository = $statusRepository;
		$this->publishStatusForm = $publishStatusForm;

	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(!Auth::check()) {
			return Redirect::route('register_path');
		}

		$statuses = $this->statusRepository->getFeedForUser(Auth::user());

		return View::make('statuses.index', compact('statuses'));
	}


	/**
	 * Save a new status.
	 *
	 * @return Response
	 */
	public function store() {

		$input = Input::only('body');
		$this->publishStatusForm->validate($input);

		$input['userId'] = Auth::user()->id;

		$this->execute(PublishStatusCommand::class, $input);

//		$this->execute(
//			new PublishStatusCommand(Input::get('body'), Auth::user()->id)
//		);

		Flash::message('Your status has been updated!');

		return Redirect::back();

	}
}
