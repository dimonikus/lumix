<?php

namespace app\controllers;

use app\modules\admin\models\Service;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class ServiceController extends Controller
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
        $services = Service::find()->orderBy('index asc')->all();

        return $this->render('index', compact('services'));
    }

    public function actionView($slug)
    {
        $serviceMenu = ArrayHelper::map(Service::find()->orderBy('index asc')->all(), 'url', 'name');
        $service = Service::findOne(['url' => $slug]);

        return $this->render('view', compact('service', 'serviceMenu'));
    }

    public function actionPrice()
    {
        $services = Service::find()->orderBy('index asc')->all();

        return $this->render('price', compact('services'));
    }
}
