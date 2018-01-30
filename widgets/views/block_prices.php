<?php
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
?>
<div class="cta-block" style="background-image: url('<?= $model->getImage() ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                <h2 class="cta-title mb20"><?= $model->name ?></h2>
                <p class="mb40 cta-content hidden-xs"><?= $model->description ?></p>
                <a href="<?= \yii\helpers\Url::to('/price') ?>" class="btn btn-primary">
                    <?= Yii::t('app', 'View Pricing') ?>
                </a>
            </div>
        </div>
    </div>
</div>
