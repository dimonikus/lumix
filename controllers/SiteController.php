<?php

namespace app\controllers;

use app\models\ContactPage;
use app\models\Feedback;
use app\models\MainBlocks;
use app\modules\admin\models\Service;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class SiteController extends Controller
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = MainBlocks::find()
            ->where(['checkbox' => MainBlocks::CHECKBOX_CHECKED])
            ->orderBy('index asc')
            ->all();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        if (!$model = ContactPage::find()->one()) {
            $model = new ContactPage();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSendMessage()
    {
        $msg = ['success' => false, 'error' => ''];
        $feedback = new Feedback();
        $feedback->load(Yii::$app->request->post(), '');
        if ($feedback->validate() && $feedback->save()) {
            $msg['success'] = true;
        } else {
            $msg['error'] = $feedback->getErrors();
        }

        return Json::encode($msg);
    }
}
