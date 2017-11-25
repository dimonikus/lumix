<?php
/* @var $service \app\modules\admin\models\Service */
use yii\widgets\ActiveForm;
use \yii\helpers\Html;

$form = ActiveForm::begin();

echo $form->field($service, 'price_description')->textarea(['rows' => 4]);

echo $form->field($service, 'price_img')->fileInput();

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>