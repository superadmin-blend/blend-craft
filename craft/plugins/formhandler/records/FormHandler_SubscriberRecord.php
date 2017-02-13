<?php

namespace Craft;

class FormHandler_SubscriberRecord extends BaseRecord
{
    public function getTableName()
    {
        return 'formhandler_subscriber';
    }

    protected function defineAttributes()
    {
        return array(
            'name' => AttributeType::Name,
            'email' => AttributeType::Email,
        );
    }

    public function defineIndexes()
    {
        return array(
            array('columns' => array('name', 'email'), 'unique' => true),
        );
    }

    public function create()
    {
        $class = get_class($this);
        $record = new $class();

        return $record;
    }
}