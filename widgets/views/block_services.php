<?php
use yii\helpers\Url;

$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
?>
<div class="space-medium">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
            <div class="section-title">
                <h1 class="heading-line">Beauty Salon Services</h1>
                <p class="mb40">Dolor sit amet consectetur adipiscing uspendisse volutpat feliscommodo bibendum odionunc tincidu.</p>
                <a href="<?= Url::to('/service') ?>" class="btn btn-default">
                    <?= Yii::t('app', 'view services') ?>
                </a>
            </div>
        </div>
        <div class="col-lg-offest-1 col-lg-8 col-md-offset-1 col-md-8 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-block mb60 outline">
                        <div class="service-caption pinside40">
                            <h2 class="service-title">
                                <a href="service-list.html" class="title">
                                    Hair Style
                                </a>
                            </h2>
                            <p class="mb40">Cras auctor laoreet duid temsem cursus sedenean elementumest vitae.</p>
                            <a href="service-list.html" class="btn-link">
                                <?= Yii::t('app', 'Read More') ?>
                            </a>
                        </div>
                        <div class="service-img"> <img src="<?= $assetPath ?>/images/service-1.jpg" class="img-responsive" alt=""> </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-block mb60 outline">
                        <div class="service-caption pinside40">
                            <h2 class="service-title"><a href="service-list.html" class="title">Makeup</a></h2>
                            <p class="mb40">Maecenas sitamet venenatis nulla eget lobortis loreduis lorem eget nulla.</p>
                            <a href="service-list.html" class="btn-link">
                                <?= Yii::t('app', 'Read More') ?>
                            </a>
                        </div>
                        <div class="service-img"> <img src="<?= $assetPath ?>/images/service-2.jpg" class="img-responsive" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>