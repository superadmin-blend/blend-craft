<?php
/**
 * Created by PhpStorm.
 * User: Piotr
 * Date: 3/02/2017
 * Time: 16:19
 */

namespace Craft;

class FormHandler_SubscriberModel extends BaseModel
{
    public function _toString()
    {
        return $this->name;
    }
    public function defineAttributes()
    {
        return [
            'name' => [
                'type'      => AttributeType::Name,
                'required'  => true,
                'maxLength' => 50,
            ],
            'email' => [
                'type'      => AttributeType::Email,
                'required'  => true,
                'max'       => 50,
            ],
        ];
    }
}