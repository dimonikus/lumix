<?php

namespace app\models;

use Yii;
use yii\helpers\BaseInflector;

/**
 * This is the model class for table "block".
 *
 * @property integer $id
 * @property integer $index
 * @property integer $checkbox
 * @property string $widget_name
 * @property string $name
 */
class MainBlocks extends \yii\db\ActiveRecord
{
    const CHECKBOX_UNCHECKED = 0;
    const CHECKBOX_CHECKED = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'block';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['index', 'checkbox'], 'integer'],
            [['widget_name', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'index' => 'Index',
            'widget_name' => 'Widget Name',
            'name' => 'Name',
            'checkbox' => 'Checkbox',
        ];
    }

    /**
     * @param $post
     * @return bool
     */
    public static function saveFromPost($post)
    {
        if (empty($post) || !isset($post['index'])) return false;

        $models = MainBlocks::find()->all();
        $indexes = explode(',', $post['index']);
        $indexes = array_flip($indexes);
        /* @var $model \app\models\MainBlocks */
        foreach ($models as $model) {
            $model->index = $indexes[$model->id];
            $model->checkbox = isset($post[$model->id]) ? self::CHECKBOX_CHECKED : self::CHECKBOX_UNCHECKED;
            $model->save();
        }

        return true;
    }

    /**
     * return string action name
     */
    public function getAction()
    {
        return BaseInflector::camel2id($this->widget_name);
    }
}
