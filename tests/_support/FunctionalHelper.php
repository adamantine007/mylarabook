<?php namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{

    public function postAStatus($overrides) {

        $I = $this->getModule('Laravel4');

        $I->fillField('body', $overrides);
        $I->click('Post Status');


        //$this->have('Larabook\Statuses\Status', $overrides);

    }

    public function signIn() {

        $email = 'foo@example.com';
        $password = 'foo';
        $username = 'foobar';

        $this->haveAnAccount(compact('username', 'email', 'password'));

        $I = $this->getModule('Laravel4');

        $I->amOnPage('/login');
        $I->fillField('email', $email);
        $I->fillField('password', $password);
        $I->click('Sign In');

    }

    public function haveAnAccount($overrides = []) {

        return $this->have('Larabook\Users\User', $overrides);

    }

    public function have($model, $override) {

        return TestDummy::create($model, $override);

    }
}
