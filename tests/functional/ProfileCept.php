<?php
$I = new FunctionalTester($scenario);
$I->am('Larabook member');
$I->wantTo('view my profile');

$I->signIn();
$I->postAStatus('Some status');

$I->click('My profile');

$I->seeCurrentUrlEquals('/@foobar');
$I->see('Some status');
