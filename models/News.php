<?php

namespace app\models;

use app\modules\admin\models\Service;
use Yii;
use yii\helpers\BaseInflector;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $image
 * @property string $name
 * @property string $url
 * @property integer $category
 * @property string $short_description
 * @property string $description
 * @property integer $status
 * @property string $date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * статусы для новостей
     */
    const STATUS_DRAFT = 0;
    const STATUS_PUBLISHED = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'status'], 'integer'],
            [['short_description', 'description'], 'string'],
            [['date'], 'safe'],
            [['image', 'name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Фото',
            'name' => 'Название',
            'url' => 'Url',
            'category' => 'Категория',
            'short_description' => 'Краткое Описание',
            'description' => 'Описание',
            'status' => 'Статус',
            'date' => 'Дата',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['id' => 'category']);
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return News::getStatusList()[$this->status];
    }

    /**
     * @return array
     */
    public static function getStatusList()
    {
        return [
            self::STATUS_DRAFT => 'Черновик',
            self::STATUS_PUBLISHED => 'Опубликован',
        ];
    }

    public function beforeSave($insert)
    {
        $old_name = $this->getOldAttribute('name');
        if ($this->name != $old_name) {
            $this->url = BaseInflector::transliterate(mb_strtolower($this->name));
        }

        return parent::beforeSave($insert);
    }
}
