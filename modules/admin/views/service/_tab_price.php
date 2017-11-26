<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $price \app\models\Price */
use yii\widgets\ActiveForm;
use \yii\helpers\Html;

$items = [];
//foreach ($services as $service) {
//    $items[$service->id] = ['content' => $service->name .
//        Html::beginTag('span', ['class' => 'pull-right']) .
//        Html::a('<i class="glyphicon glyphicon-pencil"></i>', '/admin/service/edit?id=' . $service->id,
//            ['class' => 'btn btn-primary btn-xs service-edit-btn']) . '&nbsp;' .
//        Html::a('<i class="glyphicon glyphicon-trash"></i>', '/admin/service/delete?id=' . $service->id,
//            [
//                'class' => 'btn btn-danger btn-xs service-delete-btn',
//                'onClick' => 'return confirm("Вы уверены?")'
//            ]
//        ) .
//        Html::endTag('span')
//    ];
//}

$form = ActiveForm::begin();

echo $form->field($service, 'price_description')->textarea(['rows' => 4]);

echo $form->field($service, 'price_img')->fileInput();

//echo Html::beginTag('div', ['class' => 'form-group']);
//echo Html::button('Добавить цену на услугу', ['class' => 'btn btn-success']);
//echo Html::endTag('div');
\yii\bootstrap\Modal::begin([
    'header' => 'Добавить цену на услугу',
    'headerOptions' => ['class' => 'bg-primary text-white'],
    'toggleButton' => ['label' => 'Добавить цену на услугу', 'class' => 'btn btn-success'],
]);
$modalForm = ActiveForm::begin(['action' => '/admin/service/add-new-price']);
echo $modalForm->field($price, 'name')->textInput();
echo $modalForm->field($price, 'price')->textInput();
echo $modalForm->field($price, 'service_id')->hiddenInput(['value' => $service->id]);
echo Html::button('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
\yii\bootstrap\Modal::end();
echo '<br>';
if (!empty($items)) {
    echo \kartik\sortinput\SortableInput::widget([
        'name' => 'index',
        'items' => $items,
        'hideInput' => true,
    ]);
}

echo Html::button('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>