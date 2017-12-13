<?php

namespace app\modules\admin\controllers;



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

        return $this->render('index');
    }
}
