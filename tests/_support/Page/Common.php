<?php
namespace Page;

class Common
{
    // include url of current page
    public static $URL = '';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    //login form
    public static $usernameInputText = ".//*[@id='txtUsername']";
    public static $passwordInputText = ".//*[@id='txtPassword']";
    public static $loginButton       = ".//*[@id='btnLogin']";

    //menu admin
    public static $viewAdminModuleTab     = ".//*[@id='menu_admin_viewAdminModule']";
    public static $qualificationsTab      = ".//*[@id='menu_admin_Qualifications']";
    public static $qualificationsSkillTab = ".//*[@id='menu_admin_viewSkills']";

    //skills
    public static $addNewSkillButton         = ".//*[@id='btnAdd']";
    public static $skillNameInputText        = ".//*[@id='skill_name']";
    public static $skillDescriptionInputText = ".//*[@id='skill_description']";
    public static $saveNewSkillButton        = ".//*[@id='btnSave']";
    public static $deleteSkillButton         = ".//*[@id='btnDel']";

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL . $param;
    }


}
