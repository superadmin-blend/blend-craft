<?php
/**
 * Created by PhpStorm.
 * User: Piotr
 * Date: 3/02/2017
 * Time: 14:14
 */
namespace Craft;

class FormHandlerPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Form Handler');
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

    public function registerCpRoutes()
    {
        return array(
            'formhandler\/subscriber\/new' => 'formhandler/subscriber/_edit',
            'formhandler\/subscriber\/(?P<subscriberId>\d+)' => 'formhandler/subscriber/_edit',
        );
    }


}