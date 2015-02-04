<?php namespace Larabook\Handlers;


use Larabook\Mailers\UserMailer;
use Larabook\Registration\Evenst\UserHasRegistered;
use Laracasts\Commander\Events\EventListener;

class EmailNotifier extends EventListener{

    private $mailer;

    function __construct(UserMailer $mailer) {
        $this->mailer = $mailer;
    }

    public function whenUserHasRegistered(UserHasRegistered $event){

        $this->mailer->sendWelcomeMessageTo($event->user);

    }

}