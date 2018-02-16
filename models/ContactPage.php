<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact_page".
 *
 * @property integer $id
 * @property string $address
 * @property string $phone
 * @property string $mail
 * @property string $opening_hours
 */
class ContactPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'phone', 'mail', 'opening_hours'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'phone' => 'Phone',
            'mail' => 'Mail',
            'opening_hours' => 'Opening Hours',
        ];
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return  $this->replace($this->address);
    }

    public function getPhone()
    {
        return $this->replace($this->phone);
    }

    public function getMail()
    {
        return $this->replace($this->mail);
    }

    public function getOpeningHours()
    {
        return $this->replace($this->opening_hours);
    }

    private function replace($string)
    {
        return  str_replace(';', '<br>', $string);
    }

    public static function getMainPhone()
    {
        $phone = '';
        $cache = Yii::$app->getCache();
        $contact = $cache->get('contact');
        if ($contact === false) {
            $contact = self::find()->one();
            $cache->set('contact', $contact, 6000);
        }
        if ($contact) {
            $phones = explode(';', $contact->phone);
            $phone = current($phones);
        }

        return $phone;
    }

    public static function getMainOpen()
    {
        $time = '';
        $cache = Yii::$app->getCache();
        $contact = $cache->get('contact');
        if ($contact === false) {
            $contact = self::find()->one();
            $cache->set('contact', $contact, 6000);
        }
        if ($contact) {
            $times = explode(';', $contact->opening_hours);
            $time = current($times);
        }

        return $time;
    }
}
