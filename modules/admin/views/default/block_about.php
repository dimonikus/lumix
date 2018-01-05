<?php
/* @var $this \yii\web\View */
/* @var $model \app\models\BlockAbout */
/* @var $dropDown array */
use yii\widgets\ActiveForm;
use app\modules\admin\models\Service;
use yii\helpers\Html;
use kartik\alert\AlertBlock;
?>
    <div class="admin-default-index">
        <h1>Главная страница сайта</h1>
        <p class="alert alert-info" role="alert">Редактирование блока о салоне</p>
    </div>

<?php
echo AlertBlock::widget([
    'type' => AlertBlock::TYPE_GROWL,
]);

$form = ActiveForm::begin();

echo $form->field($model, 'name')->textInput();

echo $form->field($model, 'description')->textarea(['rows' => 6]);

echo $form->field($model, 'image')->fileInput();

echo '<p>' . Html::img($model->getImage(), ['class'=>"img-rounded"]) . '</p>';

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);

ActiveForm::end();