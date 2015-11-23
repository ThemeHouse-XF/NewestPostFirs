<?php

class ThemeHouse_NewestPostFirs_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/NewestPostFirs/Extend/XenForo/ControllerPublic/Account.php' => 'ff501df7a01c479883023f51652575ad',
                'library/ThemeHouse/NewestPostFirs/Extend/XenForo/ControllerPublic/Post.php' => 'b9dd60211e9046ed956c1495002adf0b',
                'library/ThemeHouse/NewestPostFirs/Extend/XenForo/ControllerPublic/Thread.php' => 'ae91ef31871b1f9e8ebcfa3c592b6fc8',
                'library/ThemeHouse/NewestPostFirs/Extend/XenForo/DataWriter/User.php' => '00ae7c319e7a538b863d5358926b115e',
                'library/ThemeHouse/NewestPostFirs/Extend/XenForo/Model/Post.php' => '2323822c186e8324da3a44bbb0a17bc4',
                'library/ThemeHouse/NewestPostFirs/Extend/XenForo/Model/Thread.php' => '632f61218867c6fa1a22faffe4a274af',
                'library/ThemeHouse/NewestPostFirs/Extend/XenForo/ViewPublic/Thread/View.php' => 'a73f795713f4e68d421374fdf10a4a3f',
                'library/ThemeHouse/NewestPostFirs/Install/Controller.php' => '75458c6898666dae49e1102317140b85',
                'library/ThemeHouse/NewestPostFirs/Listener/LoadClass.php' => '6faafb5b6ccb33018ae6d04e97dbe1bd',
                'library/ThemeHouse/NewestPostFirs/Listener/TemplateCreate.php' => '5996038d931f4c4d8968d4d17de2873d',
                'library/ThemeHouse/NewestPostFirs/Listener/TemplateHook.php' => 'ad893c879cf073b04dfe607a4e3a0211',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
                'library/ThemeHouse/Listener/Template.php' => '0aa5e8aabb255d39cf01d671f9df0091',
                'library/ThemeHouse/Listener/Template/20150106.php' => '8d42b3b2d856af9e33b69a2ce1034442',
                'library/ThemeHouse/Listener/TemplateCreate.php' => '6bdeb679af2ea41579efde3e41e65cc7',
                'library/ThemeHouse/Listener/TemplateCreate/20150106.php' => 'c253a7a2d3a893525acf6070e9afe0dd',
                'library/ThemeHouse/Listener/TemplateHook.php' => 'a767a03baad0ca958d19577200262d50',
                'library/ThemeHouse/Listener/TemplateHook/20150106.php' => '71c539920a651eef3106e19504048756',
            ));
    }
}