<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property integer $id
 * @property string $name
 * @property integer $price
 * @property integer $service_id
 * @property integer $index
 */
class Price extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['name', 'price', 'service_id'], 'required'],
            [['price', 'service_id', 'index'], 'integer'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'service_id' => 'Service ID',
            'index' => 'Index',
        ];
    }

    /**
     * @inheritdoc
     * @return PriceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PriceQuery(get_called_class());
    }
}
