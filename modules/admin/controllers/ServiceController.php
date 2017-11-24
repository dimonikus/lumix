<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Service;
use yii\helpers\VarDumper;

class ServiceController extends \app\modules\admin\controllers\AdminController
{
    public function actionIndex()
    {
        $newService = new Service();
        $services = Service::find()->orderBy('index asc')->all();

        return $this->render('index', ['newService' => $newService, 'services' => $services]);
    }

    public function actionAddNewService()
    {
        if (\Yii::$app->request->isPost) {
            $newService = new Service();
            $newService->load(\Yii::$app->request->post());
            $newService->save();
        }

        return $this->redirect('/admin/service/index');
    }

    public function actionChangeIndex()
    {
        $index = \Yii::$app->request->post('index');
        $index = explode(',', $index);
        $index = array_flip($index);
        $services = Service::find()->all();

        foreach ($services as $service) {
            $service->index = $index[$service->id];
            $service->save();
        }

        return $this->redirect('/admin/service/index');
    }
}
