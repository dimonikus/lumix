<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p class="alert alert-info" role="alert">
        Создание и редактирование Новостей
    </p>

    <p>
        <?= Html::a('Создать новость', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'name',
//            'url:url',
//            'category',
             [
                 'attribute' => 'category',
                 'filter' => \app\modules\admin\models\Service::getServiceForDropDown(),
                 'value' => function ($data) {
                     return $data->service->name;
                 },
             ],
             'short_description:ntext',
            // 'description:ntext',
//             'status',
             [
                 'attribute' => 'status',
                 'filter' => \app\models\News::getStatusList(),
                 'value' => function ($data) {
                     return $data->getStatus();
                 },
                 'headerOptions' => ['width' => '140'],
             ],
            [
                'attribute' => 'date',
                'format' => ['date', 'dd.MM.YYYY'],
                'headerOptions' => ['width' => '120'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['width' => '30'],
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
