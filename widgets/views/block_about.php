<?php
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
?>
<div class="space-medium">
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="about-img"><img src="<?= $assetPath ?>/images/about-img.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-info mb40 bg-light pinside30">
                        <div class="section-title">
                            <h2><?= $model->name ?></h2>
                        </div>
                        <p><?= $model->description ?></p>
                        <div class="text-right">
                            <a href="#" class="btn-link">
                                <?= Yii::t('app', 'Read More') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>