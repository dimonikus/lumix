<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

\yii\bootstrap\Modal::begin([
    'id' => 'priceModal',
    'header' => 'Добавить цену на услугу',
    'headerOptions' => ['class' => 'bg-primary text-white'],
]);
$modalForm = ActiveForm::begin(['action' => '/admin/service/add-new-price']);
echo $modalForm->field($model, 'name')->textInput();
echo $modalForm->field($model, 'price')->textInput();
echo $modalForm->field($model, 'from_price')->checkbox();
echo $modalForm->field($model, 'service_id')->hiddenInput()->label(false);
echo $modalForm->field($model, 'id')->hiddenInput()->label(false);
echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
\yii\bootstrap\Modal::end();
