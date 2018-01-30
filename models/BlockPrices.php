<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "block_prices".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $image
 */
class BlockPrices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'block_prices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'image' => 'Фото (1902 x 581)',
        ];
    }

    public function getImage()
    {
        return '/' . Yii::$app->params['imagePath'] . $this->image;
    }
}
