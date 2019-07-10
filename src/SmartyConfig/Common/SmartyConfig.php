<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/beichen-portal-config/src/SmartyConfig/Bc',
            S_ROOT.'vendor/qixinyun/beichen-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/beichen-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
