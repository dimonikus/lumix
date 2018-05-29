<?php

namespace app\models;

use app\modules\admin\models\Service;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "images".
 *
 * @property integer $id
 * @property integer $service_id
 * @property string $name
 * @property integer $index
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @var MetaInfo
     */
    private $_metaInfo;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_id', 'index'], 'integer'],
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
            'service_id' => 'Service ID',
            'name' => 'Name',
            'index' => 'Index',
        ];
    }

    public static function getMenuItem(){
        $menu = '';
        $servicePath = Yii::$app->urlManager->createUrl('/portfolio/index') . '/';
        $items = ArrayHelper::map(Service::find()->orderBy('index asc')->all(), 'url', 'name');
        foreach ($items as $url=> $name) {
            $menu .= '<li><a href="'.$servicePath.$url.'" class="animsition-link">'.$name.'</a></li>';
        }

        return $menu;
    }

    public function getImagePath()
    {
        return '/uploads/images/' . $this->name;
    }

    /**
     * @return MetaInfo|array|null|\yii\db\ActiveRecord
     */
    public function getMetaInfo()
    {
        if (empty($this->_metaInfo)) {
            $this->_metaInfo = MetaInfo::find()
                ->andWhere(['model_name' => self::className(), 'model_id' => $this->service_id])
                ->one();
        }
        if (empty($this->_metaInfo)) {
            $meta = new MetaInfo();
            $meta->model_name = self::className();
            $meta->model_id = $this->service_id;
            $this->_metaInfo = $meta;
        }

        return $this->_metaInfo;
    }

    /**
     * @return string
     */
    public function getMetaTitle()
    {
        $title = $this->getMetaInfo();
        return $title->title;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        $description = $this->getMetaInfo();
        return $description->description;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        $keywords = $this->getMetaInfo();
        return $keywords->keywords;
    }

    /**
     * @return string
     */
    public function getMetaRobots()
    {
        $robots = $this->getMetaInfo();
        return $robots->robots;
    }
}
