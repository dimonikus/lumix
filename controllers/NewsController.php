<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 09.01.2018
 * Time: 21:33
 */

namespace app\controllers;

use app\models\News;
use app\modules\admin\models\Service;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use app\controllers\FrontendController;

class NewsController extends FrontendController
{
    /**
     * @return string
     */
    public function actionIndex($category = null, $date = null)
    {
        $query = News::find()->where(['status' => News::STATUS_PUBLISHED]);
        if ($category) {
            $cId = Service::find()->select('id')->andWhere(['url' => $category])->one();
            $query->andWhere(['category' => $cId]);
        }
        if ($date) {
            $fDate = explode('_', $date);
            $year = $fDate[0];
            $month = $fDate[1];
            $query->andWhere("YEAR(date) = $year and MONTH(date) = $month");
        }
        $news = $query->all();

        return $this->render('index', compact('news'));
    }

    /**
     * @return string
     */
    public function actionView($slug)
    {
        $news = News::find()->where(['status' => News::STATUS_PUBLISHED, 'url' => $slug])->one();
        $service = Service::find()->orderBy('index asc')->all();
        $categories = ArrayHelper::map($service, 'id', 'name');

        return $this->render('view', compact('news', 'categories'));
    }
}