<?php

namespace app\controllers;

use app\modules\admin\models\Service;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use app\controllers\FrontendController;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class PortfolioController extends FrontendController
{
    /**
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionView($slug)
    {
        /**
         * @var Service $model
         */
        $model = Service::findOne(['url' => $slug]);
        $images = $model->portfolio ? $model->portfolio : [];

        return $this->render('view', ['images' => $images]);
    }
}
