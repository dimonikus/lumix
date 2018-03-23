<?php
use yii\widgets\DetailView;

$this->title = 'Feedback: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Сообщения', 'url' => ['index']];
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',
        'phone',
        'message',
        'subject',
        'email',
        'date_create:datetime',
    ],
]) ?>