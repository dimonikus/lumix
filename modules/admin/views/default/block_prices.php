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
        <p class="alert alert-info" role="alert">Редактирование прайс блока</p>
    </div>

<?php
echo AlertBlock::widget([
    'type' => AlertBlock::TYPE_GROWL,
]);

$form = ActiveForm::begin();

echo $form->field($model, 'name')->textInput();

echo $form->field($model, 'description')->textarea(['rows' => 6]);

echo $form->field($model, 'image')->fileInput();

if (!empty($model->image)) {
    echo Html::beginTag('div', ['style' => 'width: 710px']);
    echo Html::a('×',
        ['/admin/default/delete-block-image', 'block' => 'app\models\BlockPrices', 'attribute' => 'image'],
        ['class' => 'close',  'aria-hidden' => 'true']
    );
    echo '<p>' . Html::img($model->getImage(),
            [
                'class'=>"img-rounded",
                'style' => 'max-height: 200px; max-width: 700px'
            ]
        ) . '</p>';
    echo Html::endTag('div');
}

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);

ActiveForm::end();