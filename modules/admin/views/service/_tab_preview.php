<?php
/* @var $service \app\modules\admin\models\Service */
use yii\widgets\ActiveForm;
use \yii\helpers\Html;

$form = ActiveForm::begin();

echo $form->field($service, 'name')->textInput();

echo $form->field($service, 'short_description')->textarea(['rows' => 4]);

echo $form->field($service, 'short_img')->fileInput();

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>


