<?php

use Larabook\Statuses\LeaveCommentOnStatusCommand;

class CommentsController extends \BaseController {



	/**
	 * Store a newly created comments in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = array_add(Input::all(), 'user_id', Auth::id());

		$this->execute(LeaveCommentOnStatusCommand::class, $input);

		return Redirect::back();
	}





}
