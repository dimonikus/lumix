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
            if ($newService->save()) {
                \Yii::$app->session->setFlash('success', 'Новая услуга добавлена!');
            } else {
                foreach ($newService->getErrors() as $error) {
                    \Yii::$app->session->setFlash('warning', $error);
                }
            }
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

    public function actionEdit($id)
    {
        $service = Service::findOne($id);
        if (\Yii::$app->request->isPost) {
            $service->load(\Yii::$app->request->post());
            if ($service->save()) {
                \Yii::$app->session->setFlash('success', 'Изменения успешно сохранены!');
            } else {
                foreach ($service->getErrors() as $error) {
                    \Yii::$app->session->setFlash('danger', $error);
                }
            }
        }

        return $this->render('edit', ['service' => $service]);
    }

    public function actionDelete($id)
    {
        if (!\Yii::$app->user->isGuest) {
            $service = Service::findOne($id);
            $service->delete();
        }

        return $this->redirect('/admin/service/index');
    }
}
