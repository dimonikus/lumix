<?php

namespace app\modules\admin\controllers;



/**
 * Default controller for the `admin` module
 */
class DefaultController extends AdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        var_dump($this->layout);
        return $this->render('index');
    }
}
