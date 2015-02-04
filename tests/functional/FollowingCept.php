<?php 
$I = new FunctionalTester($scenario);

$I->am('Larabook member');
$I->wantTo('follow other Larabook user');

$I->haveAnAccount(['username' => 'OtherUser']);
$I->signIn();

$I->click('Users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');

$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Unfollow OtherUser');

$I->click('Unfollow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Follow OtherUser');