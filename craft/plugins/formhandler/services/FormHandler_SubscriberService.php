<?php

namespace Craft;

class FormHandler_SubscriberService extends BaseApplicationComponent
{
    protected $subscriberRecord;

    public function _construct($subscriberRecord)
    {
        $this->subscriberRecord = $subscriberRecord;
        if (is_null($this->$subscriberRecord)) {
            $this->subscriberRecord = FormHandler_SubscriberRecord::model();
        }

    }

    public function newSubscriber($attributes = array())
    {
        $model = new FormHandler_SubscriberModel();
        $model->setAttribute($attributes);

        return $model;
    }

    public function saveSubscriber(FormHandler_SubscriberModel $subscriber)
    {
        $record = new FormHandler_SubscriberRecord();

        $attributes = $subscriber->getAttributes();
        $record->setAttributes($attributes);
        $record->save();
    }

    public function deleteSubscriberById($id)
    {

    }

    public function getAllSubscribers()
    {
        $records = craft()->db->createCommand()
                                    ->select('*')
                                    ->from('formhandler_subscriber')
                                    ->queryAll();
        return FormHandler_SubscriberModel::populateModels($records);
    }

    public function getRecentSubscribers()
    {
        $records = craft()->db->createCommand()
            ->select('*')
            ->from('formhandler_subscriber')
            ->order('dateCreated desc')
            ->queryAll();
        return FormHandler_SubscriberModel::populateModels($records);
    }

    /**
     * Get a specific ingredient from the database based on ID. If no ingredient exists, null is returned.
     *
     * @param  int   $id
     * @return mixed
     */
    public function getSubscriberById($id)
    {
        if ($record = $this->subscriberRecord->findByPk($id)) {
            return FormHandler_SubscriberModel::populateModel($record);
        }
    }
}