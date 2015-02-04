<?php namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Support\Facades\Hash;
use Eloquent;
use Larabook\Registration\Evenst\UserHasRegistered;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator, PresentableTrait, FollowableTrait;

	/**
	 * Which fields may be assigned?
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $presenter = 'Larabook\Users\UserPresenter';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Password must always be Hashed
	 *
	 * @param $password
	 */
	public function setPasswordAttribute($password) {

		$this->attributes['password'] = Hash::make($password);

	}

	/**
	 * A user has many statuses
	 *
	 * @return mixed
	 */
	public function statuses() {

		return $this->hasMany('Larabook\Statuses\Status')->latest();

	}

	public function comments(){
		return $this->hasMany('Larabook\Statuses\Comment');
	}
	
	/**
	 * Register a new user
	 *
	 * @param $username
	 * @param $email
	 * @param $password
	 * @return static
	 */
	public static function register($username, $email, $password) {

		$user = new static(compact('username', 'email', 'password'));

		$user->raise(new UserHasRegistered($user));

		return $user;

	}

	public function is($user){

		if(is_null($user)) return false;

		return $this->username == $user->username;

	}

}
