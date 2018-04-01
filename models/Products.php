<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $name
 * @property double $price
 * @property integer $from_price
 * @property string $description
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['from_price'], 'integer'],
            [['description'], 'string'],
            [['image', 'title', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Изображение'),
            'title' => Yii::t('app', 'Название праса'),
            'name' => Yii::t('app', 'Название продукта'),
            'price' => Yii::t('app', 'Цена'),
            'from_price' => Yii::t('app', 'От'),
            'description' => Yii::t('app', 'Описание'),
        ];
    }

    public function getImage()
    {
        return '/' . Yii::$app->params['imagePath'] . $this->image;
    }
}
