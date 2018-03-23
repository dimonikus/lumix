<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = 'Feedback: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-update">

    <h1>Сообщения</h1>
    <p class="alert alert-info" role="alert">
        Раздел для работы с сообщениями
    </p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
