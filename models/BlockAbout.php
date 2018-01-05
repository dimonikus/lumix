<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "block_about".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $image
 */
class BlockAbout extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'block_about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Заголовок',
            'description' => 'Описание',
            'image' => 'Фото (360 x 530)',
        ];
    }

    public function getImage(){}
}
