<?php

namespace Authorization;

use \AcceptanceTester;
use Step\Acceptance\CommonSteps;

class AuthorizationNegativeCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function impossibleAuthorizeWithEmptyUsernameAndPassword(AcceptanceTester $I, $scenario)
    {
        $Auth = new CommonSteps($scenario);
        $Auth->login('', '');
        $I->canSee('Username cannot be empty');
    }

    public function impossibleAuthorizeWithWrongPassword(AcceptanceTester $I, $scenario)
    {
        $Auth = new CommonSteps($scenario);
        $Auth->login('Admin', 'Admin');
        $I->canSee('Invalid credentials');
    }

    public function impossibleAuthorizeWithoutPassword(AcceptanceTester $I, $scenario)
    {
        $Auth = new CommonSteps($scenario);
        $Auth->login('Admin', '');
        $I->canSee('Password cannot be empty');
    }
}
