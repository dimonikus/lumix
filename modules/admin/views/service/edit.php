<?php
/* @var $service \app\modules\admin\models\Service */
//https://github.com/MihailDev/yii2-elfinder
//https://github.com/MihailDev/yii2-ckeditor
use kartik\tabs\TabsX;

?>

    <h1>Редактирование <?= $service->name ?></h1>

<?php
echo TabsX::widget([
    'items' => [
        [
            'label' => '<i class="glyphicon glyphicon-home"></i> Краткая информация',
            'content' => $this->render('_tab_preview', ['service' => $service]),
            'active' => true
        ],
        [
            'label' => '<i class="glyphicon glyphicon-home"></i> Обширная информация',
            'content' => $this->render('_tab_main', ['service' => $service]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-home"></i> Цена',
            'content' => $this->render('_tab_price', ['service' => $service]),
        ],
    ],
    'position' => TabsX::POS_ABOVE,
    'align' => TabsX::ALIGN_CENTER,
    'bordered' => true,
    'encodeLabels' => false
]);
?>