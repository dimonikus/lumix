<?php
/* @var $this \yii\web\View */
/* @var $block \app\models\MainBlocks */
/* @var $mainBlock \app\models\BlockMain */
/* @var $model \app\models\MainBlocks[] */
use yii\widgets\ActiveForm;
use kartik\sortinput\SortableInput;
use yii\helpers\Html;
use kartik\alert\AlertBlock;
?>
<h1>Главная страница сайта</h1>
<div class="admin-default-index">
    <p class="alert alert-info" role="alert">Редактирование текста на главной станице</p>
</div>
<?php
$mainForm = ActiveForm::begin(['action' => '/admin/default/main']);
echo $mainForm->field($mainBlock, 'name')->label('Главный текст');
echo $mainForm->field($mainBlock, 'description')->textarea(['rows' => 6])->label('описание');
echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>
<hr><br>
<div class="admin-default-index">
    <p class="alert alert-info" role="alert">Редактирование блоков главной станицы</p>
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
        Html::a('<i class="glyphicon glyphicon-pencil"></i>', '/admin/default/' . $block->getAction(),
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
