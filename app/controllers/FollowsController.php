<?php

use Larabook\Users\FollowUserCommand;
use Larabook\Users\UnfollowUserCommand;

class FollowsController extends \BaseController {




	/**
	 * Add new follower
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = array_add(Input::all(), 'userId', Auth::id());

		$this->execute(FollowUserCommand::class, $input);

		Flash::success("You are now following this user");

		return Redirect::back();
	}



	public function destroy($userIdToUnfollow)
	{
		$input = array_add(Input::all(), 'userId', Auth::id());

		$this->execute(UnfollowUserCommand::class, $input);

		Flash::success("You are now unfollowing this user");

		return Redirect::back();
	}


}