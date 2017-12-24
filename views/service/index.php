<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $services object */
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
$servicePath = Yii::$app->urlManager->createUrl('/service/index') . '/';
?>
<?= \app\widgets\HeaderCaptionWidget::widget(['heading_h1' => Yii::t('app', 'Service List')]) ?>
<div class="space-medium">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $service): ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-block mb30 outline">
                    <div class="service-caption pinside40">
                        <h2 class="service-title">
                            <a href="<?= $servicePath . $service->url ?>" class="title">
                                <?= $service->name ?>
                            </a>
                        </h2>
                        <p class="mb40"><?= $service->short_description ?></p>
                        <a href="<?= $servicePath . $service->url ?>" class="btn-link">
                            <?= Yii::t('app', 'Read More') ?>
                        </a>
                    </div>
                    <div class="service-img">
                        <img src="<?= $service->getImage('short_img') ?>" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
