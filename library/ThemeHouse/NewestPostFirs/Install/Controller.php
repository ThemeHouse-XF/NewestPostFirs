<?php

class ThemeHouse_NewestPostFirs_Install_Controller extends ThemeHouse_Install
{

    protected function _getTableChanges()
    {
        return array(
            'xf_user_option' => array(
                'thread_display_mode' => 'ENUM(\'newest_first\',\'oldest_first\', \'\') NOT NULL DEFAULT \'\'', 
            ), 
        );
    }
}