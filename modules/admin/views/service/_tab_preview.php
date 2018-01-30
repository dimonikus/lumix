<?php
/* @var $service \app\modules\admin\models\Service */
use yii\widgets\ActiveForm;
use \yii\helpers\Html;

$form = ActiveForm::begin(['action' => '/admin/service/edit?id=' . $service->id . '&tab=preview']);

echo $form->field($service, 'name')->textInput();

echo $form->field($service, 'short_description')->textarea(['rows' => 4]);

echo $form->field($service, 'short_img')->fileInput();

echo '<p>' . Html::img($service->getImage('short_img'), ['class'=>"img-rounded"]) . '</p>';

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>


