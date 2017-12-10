<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $tab string */
//https://github.com/MihailDev/yii2-elfinder
//https://github.com/MihailDev/yii2-ckeditor
use kartik\tabs\TabsX;
use \kartik\alert\AlertBlock;
?>

    <h1>Редактирование <?= $service->name ?></h1>

<?php
echo AlertBlock::widget([
    'useSessionFlash' => true,
    'type' => AlertBlock::TYPE_GROWL,
    'delay' => 0
]);

echo TabsX::widget([
    'items' => [
        [
            'label' => '<i class="glyphicon glyphicon-info-sign"></i> Краткая информация',
            'content' => $this->render('_tab_preview', ['service' => $service]),
            'active' => $tab == 'preview'
        ],
        [
            'label' => '<i class="glyphicon glyphicon-list-alt"></i> Описание услуги',
            'content' => $this->render('_tab_main', ['service' => $service]),
            'active' => $tab == 'main'
        ],
        [
            'label' => '<i class="glyphicon glyphicon-euro"></i> Прайс',
            'content' => $this->render('_tab_price', ['service' => $service, 'price' => $price]),
            'active' => $tab == 'price'
        ],
        [
            'label' => '<i class="glyphicon glyphicon-globe"></i> SEO',
            'content' => $this->render('_tab_seo', ['service' => $service]),
            'active' => $tab == 'seo'
        ],
    ],
    'position' => TabsX::POS_ABOVE,
    'align' => TabsX::ALIGN_CENTER,
    'bordered' => true,
    'encodeLabels' => false
]);
?>