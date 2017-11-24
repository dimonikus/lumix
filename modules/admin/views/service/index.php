<?php
/* @var $this yii\web\View */
use kartik\sortinput\SortableInput;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$items = [];
foreach ($services as $service) {
    $items[$service->id] = ['content' => $service->name .
        '<span class="pull-right">
            <button class="btn btn-primary btn-xs">
                <i class="glyphicon glyphicon-pencil"></i>
            </button>
            <button class="btn btn-danger btn-xs">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </span>'
    ];
}
?>
<h1>service/index</h1>

<p>
    <code>http://demos.krajee.com/sortable-input</code>
</p>
<div>
    <p>
        <?php
        Modal::begin([
            'header' => 'Добавить новую услугу',
            'headerOptions' => ['class' => 'bg-primary text-white'],
            'toggleButton' => ['label' => 'Добавить услугу', 'class' => 'btn btn-success'],
        ]);
        $modalForm = ActiveForm::begin(['action' => '/admin/service/add-new-service']);
        echo $modalForm->field($newService, 'name')->textInput();
        echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
        ActiveForm::end();
        Modal::end();
        ?>
    </p>
</div>
<?php
if (!empty($items)) {
    $form = ActiveForm::begin(['action' => '/admin/service/change-index']);
    echo SortableInput::widget([
        'name' => 'index',
        'items' => $items,
        'hideInput' => true,
    ]);
    echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
    ActiveForm::end();
}
?>
