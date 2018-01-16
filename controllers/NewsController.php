<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 09.01.2018
 * Time: 21:33
 */

namespace app\controllers;

use app\models\News;
use app\modules\admin\models\Service;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class NewsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $news = News::find()->where(['status' => News::STATUS_PUBLISHED])->all();
        $service = Service::find()->orderBy('index asc')->all();
        $categories = ArrayHelper::map($service, 'id', 'name');

        return $this->render('index', compact('news', 'categories'));
    }

    /**
     * @return string
     */
    public function actionView($slug)
    {
        $news = News::find()->where(['status' => News::STATUS_PUBLISHED, 'url' => $slug])->one();
        $service = Service::find()->orderBy('index asc')->all();
        $categories = ArrayHelper::map($service, 'id', 'name');

        return $this->render('view', compact('news', 'categories'));
    }
}