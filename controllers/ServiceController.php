<?php

namespace app\controllers;

use app\models\MetaInfo;
use app\models\MetaTagManager;
use app\modules\admin\models\Service;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use app\controllers\FrontendController;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class ServiceController extends FrontendController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $services = Service::find()->orderBy('index asc')->all();
        $seo = MetaInfo::find()
            ->andWhere(['model_name' => Service::className(), 'model_id' => 0])
            ->asArray()
            ->one();
        MetaTagManager::registerMetaTags(null, (!empty($seo) ? $seo : []));

        return $this->render('index', compact('services'));
    }

    public function actionView($slug)
    {
        $serviceMenu = ArrayHelper::map(Service::find()->orderBy('index asc')->all(), 'url', 'name');
        $service = Service::findOne(['url' => $slug]);
        MetaTagManager::registerMetaTags($service);

        return $this->render('view', compact('service', 'serviceMenu'));
    }

    public function actionPrice()
    {
        $services = Service::find()->orderBy('index asc')->all();
        MetaTagManager::registerMetaTags();

        return $this->render('price', compact('services'));
    }
}
