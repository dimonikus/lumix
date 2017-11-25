<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $services object */
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
$servicePath = Yii::$app->urlManager->createUrl('/service/index') . '/';
?>
<div class="page-header page-caption">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-title">Beauty Saloon Services</h1>
            </div>
        </div>
    </div>
</div>

<div class="space-medium">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $service): ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-block mb30 outline">
                    <div class="service-caption pinside40">
                        <h2 class="service-title">
                            <a href="service-detail.html" class="title">
                                <?= $service->name ?>
                            </a>
                        </h2>
                        <p class="mb40"><?= $service->short_description ?></p>
                        <a href="<?= $servicePath . $service->url ?>" class="btn-link">
                            <?= Yii::t('app', 'Read More') ?>
                        </a>
                    </div>
                    <div class="service-img"> <img src="<?= $assetPath ?>/images/service-1.jpg" class="img-responsive" alt=""> </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
