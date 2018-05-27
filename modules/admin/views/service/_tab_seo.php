<?php
/* @var $seo \app\models\MetaInfo */
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['action' => '/admin/service/edit?id=' . $service->id . '&tab=seo']);

echo $form->field($seo, 'model_id')->hiddenInput()->label(false);
echo $form->field($seo, 'model_name')->hiddenInput()->label(false);
echo $form->field($seo, 'title');
echo $form->field($seo, 'keywords');
echo $form->field($seo, 'description');
echo $form->field($seo, 'robots')->dropDownList(\app\models\MetaTagManager::getRobotsList());
echo \yii\helpers\Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);

ActiveForm::end();
?>