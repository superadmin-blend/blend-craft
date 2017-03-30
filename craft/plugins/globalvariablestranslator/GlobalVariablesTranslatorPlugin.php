<?php

namespace Craft;

class GlobalVariablesTranslatorPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Global variables translator');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Piotr Mazurek';
    }

    function getDeveloperUrl()
    {
        return 'www.blend.be';
    }

    public function hasCpSection()
    {
        return true;
    }
    public function registerCpRoutes(){
        return array(
            'globalvariablestranslator/(?P<globalSetId>\d+)' => 'globalvariablestranslator/_globalset',
       );
    }
}