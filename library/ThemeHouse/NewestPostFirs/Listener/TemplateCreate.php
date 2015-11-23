<?php

class ThemeHouse_NewestPostFirs_Listener_TemplateCreate extends ThemeHouse_Listener_TemplateCreate
{
    protected function _getTemplates()
    {
        return array(
            'account_preferences',
        );
    }

    public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        $templateCreate = new ThemeHouse_NewestPostFirs_Listener_TemplateCreate($templateName, $params, $template);
        list($templateName, $params) = $templateCreate->run();
    }

    protected function _accountPreferences()
    {
        $this->_preloadTemplate('th_account_preferences_newestpostfirst');
    }
}