<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('perform actions and see result');


$admin = [
    'username' => 'Admin',
    'password' => 'admin'
];

$I->amOnPage('/');
//login
$I->fillField(".//*[@id='txtUsername']", $admin['username']);
$I->fillField(".//*[@id='txtPassword']", $admin['password']);
$I->click(".//*[@id='btnLogin']");

//open skills page
$I->click(".//*[@id='menu_admin_viewAdminModule']");
$I->click(".//*[@id='menu_admin_Qualifications']");
$I->click(".//*[@id='menu_admin_viewSkills']");

//add new skill
$I->click(".//*[@id='btnAdd']");
$I->fillField(".//*[@id='skill_name']", 'newSkill');
$I->fillField(".//*[@id='skill_description']", 'skillDescription');
$I->click(".//*[@id='btnSave']");

$I->canSee('newSkill');

//delete created skill
$I->click(".//*[@id='recordsListTable']//a[contains(text(),'newSkill')]/../..//input[@type='checkbox']");

$I->cantSee('newSkill');

