<?php

namespace Craft;

class FormHandlerPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Newsletter subscriber');
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
            'formHandler/subscriber/delete/(?P<subscriberId>\d)' => array('action' => 'FormHandler_SubscriberController/deleteSubscriber')
        );
    }


}