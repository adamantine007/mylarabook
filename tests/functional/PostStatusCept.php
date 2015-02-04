<?php 
$I = new FunctionalTester($scenario);
$I->am('Larabook member');
$I->wantTo('post my status to my profile');

$I->signIn();

$I->amOnPage('statuses');

//$I->postAStatus(['body' => 'My first post!']);
$I->postAStatus('first post!');

$I->seeCurrentUrlEquals('/statuses');
$I->see('first post!');

