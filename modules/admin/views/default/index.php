<?php
/* @var $this \yii\web\View */
/* @var $block \app\models\MainBlocks */
/* @var $model \app\models\MainBlocks[] */
use yii\widgets\ActiveForm;
use kartik\sortinput\SortableInput;
use yii\helpers\Html;
use kartik\alert\AlertBlock;
?>
<div class="admin-default-index">
    <h1>Главная страница сайта</h1>
    <p>Редактирование блоков главной станицы</p>
</div>

<?php
echo AlertBlock::widget([
    'useSessionFlash' => true,
    'type' => AlertBlock::TYPE_GROWL,
    'delay' => 0
]);
$items = [];
foreach ($model as $block) {
    $items[$block->id] = ['content' => Html::checkbox($block->id, $block->checkbox, ['label' => $block->name]) .
        Html::beginTag('span', ['class' => 'pull-right']) .
        Html::a('<i class="glyphicon glyphicon-pencil"></i>', '/admin/service/edit?id=',
            ['class' => 'btn btn-primary btn-xs service-edit-btn']) . '&nbsp;' .
        Html::endTag('span')
    ];
}

if (!empty($items)) {
    $form = ActiveForm::begin();
    echo SortableInput::widget([
        'name' => 'index',
        'items' => $items,
        'hideInput' => true,
    ]);
    echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
    ActiveForm::end();
}
?>
