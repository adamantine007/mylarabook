<?php

$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a Laravel book');

$I->amOnPage('/');
$I->click('Sign Up!');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'Sergey');
$I->fillField('Email:', 'adamantine008@gmail.com');
$I->fillField('Password:', 'somepass');
$I->fillField('Password confirmation:', 'somepass');
$I->click('Sign Up');

$I->seeCurrentUrlEquals("");
$I->see('Hello there!');
$I->seeRecord('users', [
    'username' => 'Sergey',
    'email' => 'adamantine008@gmail.com'
]);

//$I->assertTrue(Auth::check());