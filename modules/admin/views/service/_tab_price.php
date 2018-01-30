<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $prices \app\models\Price[] */
/* @var $newPrice \app\models\Price */
use yii\widgets\ActiveForm;
use \yii\helpers\Html;

$items = [];
foreach ($prices as $price) {
    $items[$price->id] = ['content' => $price->name . ' - <b>' . $price->price . ' грн.</b>' .
        Html::beginTag('span', ['class' => 'pull-right']) .
        Html::a('<i class="glyphicon glyphicon-pencil"></i>',
            ['#'],
            [
                'class' => 'btn btn-primary btn-xs service-edit-btn js-price',
                'data-url' => \Yii::$app->urlManager->createUrl(['/admin/service/edit-price', 'id' => $price->id]),
                'onClick' => 'return false'
            ]) . '&nbsp;' .
        Html::a('<i class="glyphicon glyphicon-trash"></i>', '/admin/service/delete-price?id=' . $price->id,
            [
                'class' => 'btn btn-danger btn-xs service-delete-btn',
                'onClick' => 'return confirm("Вы уверены?")'
            ]
        ) .
        Html::endTag('span')
    ];
}
if (!empty($items)) {
    echo \kartik\sortinput\SortableInput::widget([
        'name' => 'index',
        'items' => $items,
        'hideInput' => true,
    ]);
}

echo Html::tag('div', '', ['id' => 'forPriceModal']);

echo Html::button('Добавить цену на услугу',
    [
        'class' => 'btn btn-success js-price',
        'data-url' => \Yii::$app->urlManager->createUrl(
            [
                '/admin/service/edit-price',
                'id' => \app\models\Price::NEW_PRICE,
                'serviceId' => $service->id,
            ]
        )
    ]
);

echo '<br><br>';

$form = ActiveForm::begin(['action' => '/admin/service/edit?id=' . $service->id . '&tab=price']);

echo $form->field($service, 'price_description')->textarea(['rows' => 4]);

echo $form->field($service, 'price_img')->fileInput();

//echo Html::beginTag('div', ['class' => 'form-group']);
//echo Html::button('Добавить цену на услугу', ['class' => 'btn btn-success']);
//echo Html::endTag('div');

echo '<p>' . Html::img($service->getImage('price_img'), ['class'=>"img-rounded"]) . '</p>';
echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>