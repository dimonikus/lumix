<?php

namespace app\modules\admin\controllers;

class ServiceController extends \app\modules\admin\controllers\AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
