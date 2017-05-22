<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('login as admin');

$admin = [
    'username' => 'Admin',
    'password' => 'admin'
];

$I->amOnPage('/');

$I->fillField(".//*[@id='txtUsername']", $admin['username']);
$I->fillField(".//*[@id='txtPassword']", $admin['password']);
$I->click(".//*[@id='btnLogin']");

$I->canSee('Welcome Admin');


