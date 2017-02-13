<?php

namespace Craft;

class FormHandler_RecentSubscribersWidget extends BaseWidget
{
    protected $colspan = 2;

    public function getName()
    {
        return Craft::t('Recent Subscribers');
    }

    public function getBodyHtml()
    {
        return craft()->templates->render('FormHandler/_widget');
    }

    public function getColspan()
    {
        return $this->colspan;
    }

}