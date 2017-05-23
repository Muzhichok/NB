<?php

namespace Step\Acceptance;

use Page\Common;

class CommonSteps extends \AcceptanceTester
{

    public function login($username, $password)
    {
        $this->fillField(Common::$usernameInputText, $username);
        $this->fillField(Common::$passwordInputText, $password);
        $this->click(Common::$loginButton);
    }

    public function addNewSkill($skillName, $skillDescription)
    {
        $this->click(Common::$addNewSkillButton);
        $this->fillField(Common::$skillNameInputText, $skillName);
        $this->fillField(Common::$skillDescriptionInputText, $skillDescription);
        $this->click(Common::$saveNewSkillButton);
    }

    public function deleteSkill($skillName)
    {
        $this->click(".//*[@id='recordsListTable']//a[contains(text(),'" . $skillName . "')]/../..//input[@type='checkbox']");
        $this->click(Common::$deleteSkillButton);
    }

}