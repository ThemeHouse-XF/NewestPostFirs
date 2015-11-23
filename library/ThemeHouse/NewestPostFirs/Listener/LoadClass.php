<?php

class ThemeHouse_NewestPostFirs_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_NewestPostFirs' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Account',
                    'XenForo_ControllerPublic_Post',
                    'XenForo_ControllerPublic_Thread',
                ), 
                'datawriter' => array(
                    'XenForo_DataWriter_User',
                ), 
                'model' => array(
                    'XenForo_Model_Post',
                    'XenForo_Model_Thread',
                ), 
                'view' => array(
                    'XenForo_ViewPublic_Thread_View',
                ), 
            ), 
        );
    }

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_NewestPostFirs_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    }

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new ThemeHouse_NewestPostFirs_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    }

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_NewestPostFirs_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    }

    public static function loadClassView($class, array &$extend)
    {
        $loadClassView = new ThemeHouse_NewestPostFirs_Listener_LoadClass($class, $extend, 'view');
        $extend = $loadClassView->run();
    }
}