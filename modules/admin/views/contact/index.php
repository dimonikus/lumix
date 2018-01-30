<?php
/* @var $model \app\models\ContactPage */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Контакты</h1>
<p class="alert alert-info" role="alert">
    <strong>Внимание!</strong><br>
    Для разделения контактов, почты и тд используйте ";"
</p>

<?php

$form = ActiveForm::begin();

echo $form->field($model, 'address')->label('Адрес');
echo $form->field($model, 'phone')->label('Телефон');
echo $form->field($model, 'mail')->label('Электронная почта');
echo $form->field($model, 'opening_hours')->label('Режим работы');

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);

ActiveForm::end();