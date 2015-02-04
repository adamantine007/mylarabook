<?php namespace Larabook\Mailers;


use Larabook\Users\User;

class UserMailer extends Mailer {

    public function sendWelcomeMessageTo(User $user){

        $subject = 'Welcome to larabook';

        $view = 'emails.registration.confirm';

        $this->sendTo($user, $subject, $view);
    }

}