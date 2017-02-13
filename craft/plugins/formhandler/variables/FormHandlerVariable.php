<?php
/**
 * Created by PhpStorm.
 * User: Piotr
 * Date: 9/02/2017
 * Time: 13:39
 */
namespace Craft;

class FormHandlerVariable
{
    /**
     * Get all available ingredients
     *
     * @return array
     */

    public function getAllSubscribers()
    {

        return craft()->formHandler_subscriber->getAllSubscribers();
    }

    /**
     * Get a specific ingredient. If no ingredient is found, returns null
     *
     * @param  int   $id
     * @return mixed
     */
    public function getSubscriberById($id)
    {
        return craft()->formHandler_subscriber->getSubsciberById($id);
    }
}
