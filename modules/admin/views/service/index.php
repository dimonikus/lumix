<?php
/* @var $this yii\web\View */
/* @var $services object */
/* @var $service \app\modules\admin\models\Service */
/* @var $newService \app\modules\admin\models\Service */
use kartik\sortinput\SortableInput;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\alert\AlertBlock;

echo AlertBlock::widget([
    'useSessionFlash' => true,
    'type' => AlertBlock::TYPE_GROWL,
    'delay' => 0
]);

$items = [];
foreach ($services as $service) {
    $items[$service->id] = ['content' => $service->name .
        Html::beginTag('span', ['class' => 'pull-right']) .
        Html::a('<i class="glyphicon glyphicon-pencil"></i>', '/admin/service/edit?id=' . $service->id,
            ['class' => 'btn btn-primary btn-xs service-edit-btn']) . '&nbsp;' .
        Html::a('<i class="glyphicon glyphicon-trash"></i>', '/admin/service/delete?id=' . $service->id,
            [
                'class' => 'btn btn-danger btn-xs service-delete-btn',
                'onClick' => 'return confirm("Вы уверены?")'
            ]
        ) .
        Html::endTag('span')
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
