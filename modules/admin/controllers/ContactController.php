<?php

namespace app\modules\admin\controllers;

use app\models\ContactPage;
use app\models\Price;
use app\modules\admin\models\ImageHelper;
use app\modules\admin\models\Service;
use yii\di\Instance;
use yii\helpers\VarDumper;
use yii\web\UploadedFile;

class ContactController extends \app\modules\admin\controllers\AdminController
{
    public  function beforeAction($action)
    {
        if (\Yii::$app->user->isGuest) {
            return $this->redirect(['/admin/admin/login']);
        }
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function actionIndex()
    {
        if (!$contactPage = ContactPage::find()->one()) {
            $contactPage = new ContactPage();
        }
        if (\Yii::$app->request->isPost && $contactPage->load(\Yii::$app->request->post())) {
            $contactPage->save();
        }

        return $this->render('index', ['model' => $contactPage]);
    }
}