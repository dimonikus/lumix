<?php

namespace app\modules\admin\controllers;
use app\models\BlockServices;
use app\models\MainBlocks;
use app\modules\admin\models\Service;
use yii\helpers\VarDumper;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends AdminController
{
    public  function beforeAction($action)
    {
        if (\Yii::$app->user->isGuest) {
            return $this->redirect(['/admin/admin/login']);
        }
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->request->isPost) {
            MainBlocks::saveFromPost(\Yii::$app->request->post())
                ? \Yii::$app->session->setFlash('success', 'Главная страница сайта сохранена!')
                : \Yii::$app->session->setFlash('warning', 'Главная страница сайта не сохранена!');
        }

        $model = MainBlocks::find()->orderBy('index asc')->all();

        return $this->render('index', compact('model'));
    }

    public function actionServicesBlockWidget()
    {
        if (!$model = BlockServices::find()->one()) {
            $model = new BlockServices();
        }
        $dropDown = Service::getServiceForDropDown();

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            if ($model->save()) \Yii::$app->session->setFlash('success', 'Блок с услугами сохранен успешно.');
        }

        \Yii::$app->session->setFlash('info', 'Редактирование блока с услугами');

        return $this->render('block_services', compact('model', 'dropDown'));
    }

    public function actionAboutBlockWidget()
    {
        echo 'hello';
    }

    public function actionBestPricesWidget()
    {
        echo 'hello';
    }

    public function actionPortfoliosBlockWidget()
    {
        echo 'hello';
    }
}
