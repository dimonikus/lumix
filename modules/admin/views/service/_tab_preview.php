<?php
/* @var $service \app\modules\admin\models\Service */
use yii\widgets\ActiveForm;
use \yii\helpers\Html;

$form = ActiveForm::begin(['action' => '/admin/service/edit?id=' . $service->id . '&tab=preview']);

echo $form->field($service, 'name')->textInput();

echo $form->field($service, 'short_description')->textarea(['rows' => 4]);

echo $form->field($service, 'short_img')->fileInput();

if (!empty($service->short_img)) {
    echo Html::beginTag('div', ['style' => 'width: 380px']);
    echo Html::a('×',
        ['/admin/service/delete-image', 'id' => $service->id, 'tab' => 'preview', 'attribute' => 'short_img'],
        ['class' => 'close',  'aria-hidden' => 'true']
    );
    echo '<p>' . Html::img($service->getImage('short_img'),
            [
                'class'=>"img-rounded",
                'style' => 'max-height: 160px; max-width: 360px'
            ]
        ) . '</p>';
    echo Html::endTag('div');
}

echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>


