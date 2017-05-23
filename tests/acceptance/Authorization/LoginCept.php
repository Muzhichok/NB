<?php

use Step\Acceptance\CommonSteps;

$I = new AcceptanceTester($scenario);

$I->wantTo('login as admin');

$user = [
    'username' => 'Admin',
    'password' => 'admin'
];

$Authorization = new CommonSteps($scenario);

$I->amOnPage('/');

$Authorization->login($user['username'], $user['password']);

$I->canSee('Welcome ' . $user['username']);
