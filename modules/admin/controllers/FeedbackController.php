<?php

namespace app\modules\admin\controllers;

use app\models\Feedback;
use app\models\FeedbackSearch;
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
class FeedbackController extends AdminController
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
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FeedbackSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUpdate($id)
    {
        if ($model = Feedback::find()->where(['id' => $id])->one()) {
            $model->status = Feedback::STATUS_READ;
            $model->save();
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        if ($model = Feedback::find()->where(['id' => $id])->one()) {
            $model->status = Feedback::STATUS_READ;
            $model->save();
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}
