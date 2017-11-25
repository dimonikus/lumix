<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $serviceMenu array */

$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
$servicePath = Yii::$app->urlManager->createUrl('/service/index') . '/';
?>
<div class="page-header page-caption">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-title">Service Single</h1>
            </div>
        </div>
    </div>
</div>

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="service-single-block mb30">
                            <div class="service-single-img"> <img src="<?= $assetPath ?>/images/service-single.jpg" class="img-responsive" alt=""></div>
                            <div class="service-single-content pinside30 outline">
                                <h1 class="section-title"><?= $service->name ?></h1>
                                <?= $service->description ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="sidenav pinside30 mb30">
                            <ul class="listnone sidenav-outline">
                                <?php foreach ($serviceMenu as $url => $name): ?>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="<?= $servicePath . $url ?>" class="<?= $service->url == $url ? 'active' : '' ?>">
                                        <?= $name ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="price-block outline mb30">
                            <div class="price-img"><img src="<?= $assetPath ?>/images/pricing-img-1.jpg" class="img-responsive" alt=""></div>
                            <div class="price-content pinside30">
                                <h2 class="price-title mb10"><?= $service->name ?></h2>
                                <p class="mb30"><?= $service->price_description ?></p>
                                <ul class="listnone mb40 text-uppercase">
                                    <li>MANICURE.....................................<span class="meta-price">$30</span></li>
                                    <li>SIMPLE NAILPAINT.........................<span class="meta-price">$10</span></li>
                                    <li>NAIL PAINT DESIGN.......................<span class="meta-price">$25</span></li>
                                </ul>
                                <div class="text-center"> <a href="pricing.html" class="btn btn-default">book now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>