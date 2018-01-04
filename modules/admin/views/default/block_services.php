<?php
/* @var $this \yii\web\View */
/* @var $model \app\models\BlockServices */
/* @var $dropDown array */
use yii\widgets\ActiveForm;
use app\modules\admin\models\Service;
use yii\helpers\Html;
use kartik\alert\AlertBlock;
?>
<div class="admin-default-index">
    <h1>Главная страница сайта</h1>
    <p>Редактирование блока с услугами</p>
</div>

<?php
echo AlertBlock::widget([
    'type' => AlertBlock::TYPE_GROWL,
]);

$form = ActiveForm::begin();

echo $form->field($model, 'name')->textInput();

echo $form->field($model, 'description')->textarea(['rows' => 6]);

echo $form->field($model, 'first_service_id')->dropDownList($dropDown);

echo $form->field($model, 'second_service_id')->dropDownList($dropDown);

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);

ActiveForm::end();