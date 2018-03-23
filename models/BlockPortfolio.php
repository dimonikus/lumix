<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "block_portfolio".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $service_id_1
 * @property integer $service_id_2
 * @property integer $service_id_3
 * @property integer $service_id_4
 * @property integer $service_id_5
 */
class BlockPortfolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'block_portfolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['description'], 'string'],
            [['service_id_1', 'service_id_2', 'service_id_3', 'service_id_4', 'service_id_5'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'description' => Yii::t('app', 'Описание'),
            'service_id_1' => Yii::t('app', 'Блок с фото 1'),
            'service_id_2' => Yii::t('app', 'Блок с фото 2'),
            'service_id_3' => Yii::t('app', 'Блок с фото 3'),
            'service_id_4' => Yii::t('app', 'Блок с фото 4'),
            'service_id_5' => Yii::t('app', 'Блок с фото 5'),
        ];
    }
}
