<?php

/**
 * 
 * @see XenForo_ControllerPublic_Account
 */
class ThemeHouse_NewestPostFirs_Extend_XenForo_ControllerPublic_Account extends XFCP_ThemeHouse_NewestPostFirs_Extend_XenForo_ControllerPublic_Account
{

    /**
     *
     * @see XenForo_ControllerPublic_Account::actionPreferencesSave()
     */
    public function actionPreferencesSave()
    {
        $GLOBALS['XenForo_ControllerPublic_Account'] = $this;
        
        return parent::actionPreferencesSave();
    }
}