<?php

namespace app\modules\admin\controllers;

use app\models\Price;
use app\modules\admin\models\ImageHelper;
use app\modules\admin\models\Service;
use yii\di\Instance;
use yii\helpers\VarDumper;
use yii\web\UploadedFile;

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

    public function actionAddNewPrice()
    {
        if (\Yii::$app->request->isPost) {
            $price = new Price();
            $price->load(\Yii::$app->request->post());
            if ($price->save()) {
                \Yii::$app->session->setFlash('success', 'Прайс добавлен!');
            } else {
                foreach ($price->getErrors() as $error) {
                    \Yii::$app->session->setFlash('warning', $error);
                }
            }
        }

        return $this->redirect('/admin/service/edit?tab=price&id=' . $price->service_id);
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

    public function actionEdit($id, $tab = 'preview')
    {
        $service = Service::findOne($id);
        $prices = Price::find()->andWhere(['service_id' => $id])->all();
        $newPrice = new Price();
        $image = new ImageHelper();
        if (\Yii::$app->request->isPost) {
            $service->load(\Yii::$app->request->post());
            $service->short_img = $image->upload($service, 'short_img');
            $service->price_img = $image->upload($service, 'price_img');
            $service->main_img = $image->upload($service, 'main_img');
            if ($service->save()) {
                \Yii::$app->session->setFlash('success', 'Изменения успешно сохранены!');
            } else {
                foreach ($service->getErrors() as $error) {
                    \Yii::$app->session->setFlash('danger', $error);
                }
            }
        }

        return $this->render('edit', [
            'service' => $service,
            'prices' => $prices,
            'newPrice' => $newPrice,
            'tab' => $tab]);
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
