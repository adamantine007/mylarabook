<?php namespace Larabook\Registration\Evenst;


use Larabook\Users\User;

class UserHasRegistered {

    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }


}