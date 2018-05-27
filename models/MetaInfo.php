<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meta_info".
 *
 * @property integer $id
 * @property string $model_name
 * @property integer $model_id
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property integer $robots
 */
class MetaInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meta_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_id', 'robots'], 'integer'],
            [['model_name', 'title', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'model_name' => Yii::t('app', 'Model Name'),
            'model_id' => Yii::t('app', 'Model ID'),
            'title' => Yii::t('app', 'Title'),
            'keywords' => Yii::t('app', 'Keywords'),
            'description' => Yii::t('app', 'Description'),
            'robots' => Yii::t('app', 'Robots'),
        ];
    }
}
