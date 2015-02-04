<?php namespace Larabook\Users;


use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    public function gravatar($size = 30) {

        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{$email}?s={$size}";

    }

    public function statusCount(){

        $count = $this->entity->statuses()->count();

        $plural = str_plural('status', $count);

        return "{$count} {$plural}";
    }

    public function followersCount() {

        $count = $this->entity->followers()->count();

        $plural = str_plural('follower', $count);

        return "{$count} {$plural}";
    }

}