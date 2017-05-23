<?php

use Step\Acceptance\CommonSteps;
use Page\Common;

$I = new AcceptanceTester($scenario);

$I->wantTo('add new skill and then delete it');


$user = [
    'username' => 'Admin',
    'password' => 'admin'
];

$skill = [
    'name'        => 'newSkill',
    'description' => 'newSkill'
];

$Authorization = new CommonSteps($scenario);
$Skills        = new CommonSteps($scenario);

$I->amOnPage('/');

$Authorization->login($user['username'], $user['password']);

//open skills page
$I->click(Common::$viewAdminModuleTab);
$I->click(Common::$qualificationsTab);
$I->click(Common::$qualificationsSkillTab);

//add new skill
$Skills->addNewSkill($skill['name'], $skill['description']);

$I->canSee('newSkill');

//delete created skill
$Skills->deleteSkill($skill['name']);

$I->cantSee($skill['name']);

