<?php
use yii\helpers\Url;

$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
$servicePath = Yii::$app->urlManager->createUrl('/service/index') . '/';
?>
<div class="space-medium">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
            <div class="section-title">
                <h2 class="heading-line"><?= $model->name ?></h2>
                <p class="mb40"><?= $model->description ?></p>
                <a href="<?= Url::to('/service') ?>" class="btn btn-default">
                    <?= Yii::t('app', 'view services') ?>
                </a>
            </div>
        </div>
        <div class="col-lg-offest-1 col-lg-8 col-md-offset-1 col-md-8 col-sm-12 col-xs-12">
            <div class="row">
                <?php foreach ($services as $service): ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-block mb60 outline">
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
</div>
</div>