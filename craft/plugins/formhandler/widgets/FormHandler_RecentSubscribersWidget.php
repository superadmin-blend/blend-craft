<?php
/**
 * Created by PhpStorm.
 * User: Piotr
 * Date: 3/02/2017
 * Time: 16:03
 */
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