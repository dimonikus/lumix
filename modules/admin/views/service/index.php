<?php
/* @var $this yii\web\View */
use kartik\sortinput\SortableInput;
?>
<h1>service/index</h1>

<p>
    <code>http://demos.krajee.com/sortable-input</code>
</p>

<?php
$form = \yii\widgets\ActiveForm::begin();
echo SortableInput::widget([
    'name'=> 'sort_list_1',
    'items' => [
        1 => ['content' => '<i class="glyphicon glyphicon-cog"></i> Item # 1'],
        2 => ['content' => '<i class="glyphicon glyphicon-cog"></i> Item # 2'],
        3 => ['content' => '<i class="glyphicon glyphicon-cog"></i> Item # 3'],
        4 => ['content' => '<i class="glyphicon glyphicon-cog"></i> Item # 4'],
        5 => ['content' => '<i class="glyphicon glyphicon-cog"></i> Item # 5']
    ],
    'hideInput' => true,
]);
\yii\widgets\ActiveForm::end();
?>
