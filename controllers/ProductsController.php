<?php

namespace app\controllers;

use app\models\MetaTagManager;
use app\models\Products;
use app\modules\admin\models\Service;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use app\controllers\FrontendController;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class ProductsController extends FrontendController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $products = Products::find()->all();
        MetaTagManager::registerMetaTags();

        return $this->render('index', compact('products'));
    }
}
