<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('login to my account');
$I->am('Larabook member');

$I->signIn();

$I->seeInCurrentUrl('/statuses');
$I->see('Welcome back!');
$I->assertTrue(Auth::check());
