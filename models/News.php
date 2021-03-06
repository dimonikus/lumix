<?php

namespace app\models;

use app\modules\admin\models\Service;
use Yii;
use app\modules\admin\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $image
 * @property string $name
 * @property string $url
 * @property integer $category
 * @property string $short_description
 * @property string $description
 * @property integer $status
 * @property string $date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * статусы для новостей
     */
    const STATUS_DRAFT = 0;
    const STATUS_PUBLISHED = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'status'], 'integer'],
            [['short_description', 'description'], 'string'],
            [['date'], 'safe'],
            [['image', 'name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Фото',
            'name' => 'Название',
            'url' => 'Url',
            'category' => 'Категория',
            'short_description' => 'Краткое Описание',
            'description' => 'Описание',
            'status' => 'Статус',
            'date' => 'Дата',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['id' => 'category']);
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return News::getStatusList()[$this->status];
    }

    /**
     * @return array
     */
    public static function getStatusList()
    {
        return [
            self::STATUS_DRAFT => 'Черновик',
            self::STATUS_PUBLISHED => 'Опубликован',
        ];
    }

    public function behaviors()
    {
        $behaviors = [
            SluggableBehavior::className() => [
                'class' => SluggableBehavior::className(),
                'ensureUnique' => true,
                'attribute' => 'name',
                'slugAttribute' => 'url',
            ],

        ];

        return ArrayHelper::merge(parent::behaviors(), $behaviors);
    }

    public static function getCategories()
    {
        $catId = self::find()
            ->select('category')
            ->where(['status' => self::STATUS_PUBLISHED])
            ->groupBy('category')
            ->asArray()
            ->all();

        $catId = ArrayHelper::map($catId, 'category', 'category');
        $service = Service::find()->where(['id' => $catId])->all();

        $categories = ArrayHelper::map($service, 'url', 'name');

        return !empty($categories) ? $categories : [];
    }

    public static function getRecentPost()
    {
        return self::find()->where(['status' => self::STATUS_PUBLISHED])->limit(3)->all();
    }

    public function getShortDescription()
    {
        return StringHelper::truncateWords($this->short_description, 10);
    }

    public static function getNewsDate()
    {
        $dates = [];
        $allNews = self::find()
            ->where(['status' => self::STATUS_PUBLISHED])
            ->orderBy(['date' => SORT_DESC])
            ->all();

        foreach ($allNews as $news) {
            $dates[date("Y_m", strtotime($news->date))] = $news->date;
        }

        return $dates;
    }
}
