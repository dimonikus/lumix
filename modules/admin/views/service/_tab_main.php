<?php
/* @var $service \app\modules\admin\models\Service */
use yii\widgets\ActiveForm;
use \yii\helpers\Html;
use dosamigos\ckeditor\CKEditor;

$form = ActiveForm::begin();

echo $form->field($service, 'description')->widget(CKEditor::className(), [
    'options' => ['rows' => 6],
    'preset' => 'full',
]);

echo $form->field($service, 'main_img')->fileInput();
echo '<p>' . Html::img($service->getImage('main_img'), ['class'=>"img-rounded"]) . '</p>';
echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>