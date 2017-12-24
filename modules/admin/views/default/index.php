<?php
use yii\widgets\ActiveForm;
use kartik\sortinput\SortableInput;
use yii\helpers\Html;
?>
<div class="admin-default-index">
    <h1>Главная страница сайта</h1>
    <p>Редактирование блоков главной станицы</p>
</div>

<?php
$items = [
    1 => ['content' => 'Item # 1'],
    2 => ['content' => 'Item # 2'],
    3 => ['content' => 'Item # 3'],
    4 => ['content' => 'Item # 4'],
    5 => ['content' => 'Item # 5'],
];
if (!empty($items)) {
    $form = ActiveForm::begin();
    echo SortableInput::widget([
        'name' => 'index',
        'items' => $items,
        'hideInput' => false,
    ]);
    echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
    ActiveForm::end();
}
?>
