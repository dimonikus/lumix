<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Портфолио';
//$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Портфолио</h1>
<p class="alert alert-info" role="alert">
    <strong>Внимание!</strong><br>
    Для наполнения портфолио, выберите раздел и нажмите кнопку <b>наполнить</b>
</p>

<div class="form-group">
    <?= Html::label('выберите раздел', 'portfolio') ?>
    <?= Html::dropDownList('portfolio', null,  \app\modules\admin\models\Service::getServiceForDropDown(),
    ['class' => 'form-control', 'id' => 'portfolio_id']) ?>
</div>
<?= Html::button('наполнить', ['class' => 'btn btn-primary',
    'onClick' => 'js: window.location.href = "/admin/portfolio/view?id=" + $("#portfolio_id").val()'
]) ?>
<?= Html::button('seo', ['class' => 'btn btn-primary', 'style' => 'margin-left: 10px',
    'onClick' => 'js: window.location.href = "/admin/portfolio/seo?id=" + $("#portfolio_id").val()'
]) ?>
