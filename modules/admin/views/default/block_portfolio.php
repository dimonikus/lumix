<?php
/* @var $this \yii\web\View */
/* @var $model \app\models\BlockPortfolio */
/* @var $dropDown array */
use kartik\alert\AlertBlock;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
    <div class="admin-default-index">
        <h1>Главная страница сайта</h1>
        <p class="alert alert-info" role="alert">Редактирование блока портфолио</p>
    </div>

<?php
echo AlertBlock::widget([
    'type' => AlertBlock::TYPE_GROWL,
]);

$form = ActiveForm::begin();

echo $form->field($model, 'name')->textInput();

echo $form->field($model, 'description')->textarea(['rows' => 6]);

echo $form->field($model, 'service_id_1')->dropDownList($dropDown);

echo $form->field($model, 'service_id_2')->dropDownList($dropDown);

echo $form->field($model, 'service_id_3')->dropDownList($dropDown);

echo $form->field($model, 'service_id_4')->dropDownList($dropDown);

echo $form->field($model, 'service_id_5')->dropDownList($dropDown);

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);

ActiveForm::end();