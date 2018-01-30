<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "block_services".
 *
 * @property integer $id
 * @property string $description
 * @property integer $first_service_id
 * @property integer $second_service_id
 * @property string $name
 */
class BlockServices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'block_services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['first_service_id', 'second_service_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Описание',
            'first_service_id' => '1-я услуга',
            'second_service_id' => '2-я услуга',
            'name' => 'Заголовок',
        ];
    }
}
