<?php

namespace app\modules\admin\controllers;

use app\models\Images;
use app\modules\admin\models\ImageHelper;
use Yii;
use app\models\News;
use app\models\NewsSearch;
use app\modules\admin\controllers\AdminController;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 */
class PortfolioController extends AdminController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        $model = Images::find()->andWhere(['service_id' => $id])->all();

        return $this->render('view', ['model' => $model, 'id' => $id]);
    }

    public function actionFileUpload($id)
    {
        if (\Yii::$app->request->isPost) {
            $image = new ImageHelper();
            $model = new Images();
            $model->load(\Yii::$app->request->post());
            $model->service_id = $id;
            $model->name = $image->upload($model, 'name');
            if ($model->save()) {
                return Json::encode(true);
            } else {
                return Json::encode($model->getErrors());
            }
        }

        return Json::encode(false);
    }

    public function actionFileDelete()
    {
        if ($id = Yii::$app->request->post('key')) {
            $model = Images::find()->where(['id' => $id])->one();
            $img = new ImageHelper();
            $img->remove($model->name);
            if ($model->delete()) {
                return Json::encode(true);
            } else {
                return Json::encode($model->getErrors());
            }
        }

        return Json::encode(false);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
