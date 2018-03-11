<?php
use app\models\Feedback;
use yii\widgets\Pjax;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<h1>Сообщения</h1>
<p class="alert alert-info" role="alert">
    Раздел для работы с сообщениями
</p>

<?php Pjax::begin(); ?>    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'name',
        'phone',
        'message',
        'subject',
        'email',
        [
            'attribute' => 'status',
            'filter' => Feedback::getStatusList(),
            'format' => 'html',
            'value' => function ($data) {
                return $data->status
                    ? '<span class="alert-success">Прочитанное</span>'
                    : '<span class="alert-warning">Новое</span>';
            },
            'headerOptions' => ['width' => '140'],
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '30'],
        ],
    ],
]); ?>
<?php Pjax::end(); ?>