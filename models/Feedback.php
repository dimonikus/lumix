<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $phone
 * @property string $subject
 * @property string $message
 * @property integer $read
 * @property string $date_create
 */
class Feedback extends \yii\db\ActiveRecord
{
    const STATUS_NEW = 0;
    const STATUS_READ = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'status'], 'integer'],
            [['phone', 'name', 'message'], 'required'],
            [['message'], 'string'],
            [['email'], 'email'],
            [['date_create'], 'safe'],
            [['name', 'email', 'subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'subject' => Yii::t('app', 'Subject'),
            'message' => Yii::t('app', 'Message'),
            'status' => Yii::t('app', 'Status'),
            'date_create' => Yii::t('app', 'Date Create'),
        ];
    }

    public static function getNewMessageCount()
    {
        return self::find()->where(['status' => self::STATUS_NEW])->count();
    }

    public static function getStatusList()
    {
        return [
            self::STATUS_NEW => 'Новые',
            self::STATUS_READ => 'Прочитанные',
        ];
    }
}
