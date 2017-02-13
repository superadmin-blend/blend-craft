<?php
/**
 * Created by PhpStorm.
 * User: Piotr
 * Date: 3/02/2017
 * Time: 15:28
 */

namespace Craft;

class FormHandler_SubscriberController extends BaseController
{
    protected $allowAnonymous = array('actionSaveSubscriber');

    public function actionSaveSubscriber()
    {
        $this->requirePostRequest();

        $subscriber = new FormHandler_SubscriberModel();
        $subscriber->name = craft()->request->getPost('name');
        $subscriber->email = craft()->request->getPost('email');

        if($subscriber->validate()){
            craft()->formHandler_subscriber->saveSubscriber($subscriber);
        }
        else {
        }

    }




    public function actionDeleteSubscriber()
    {

    }


}