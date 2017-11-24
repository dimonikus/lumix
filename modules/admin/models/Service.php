<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $name
 * @property string $short_description
 * @property string $price_description
 * @property string $description
 * @property string $short_img
 * @property string $price_img
 * @property string $main_img
 * @property integer $index
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['index'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['short_description', 'price_description', 'short_img', 'price_img', 'main_img'], 'string', 'max' => 255],
            [['name'], 'unique'],
            ['index', 'default', 'value' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название услуги',
            'short_description' => 'Short Description',
            'price_description' => 'Price Description',
            'description' => 'Description',
            'short_img' => 'Short Img',
            'price_img' => 'Price Img',
            'main_img' => 'Main Img',
            'index' => 'Index',
        ];
    }

    public static function getMenuItem(){
        $menu = '';
        $items = ArrayHelper::map(self::find()->orderBy('index asc')->all(), 'id', 'name');
        foreach ($items as $id => $name) {
            $menu .= '<li><a href="blog-default.html" class="animsition-link">'.$name.'</a></li>';
        }

        return $menu;
    }

    /**
     * @inheritdoc
     * @return ServiceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServiceQuery(get_called_class());
    }
}
