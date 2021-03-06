<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $serviceMenu array */

$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
$servicePath = Yii::$app->urlManager->createUrl('/service/index') . '/';
?>
<?= \app\widgets\HeaderCaptionWidget::widget(['heading_h1' => $service->name]) ?>
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="service-single-block mb30">
                            <?php if ($service->main_img): ?>
                            <div class="service-single-img">
                                <img src="<?= $service->getImage('main_img') ?>" class="img-responsive" alt="">
                            </div>
                            <?php endif; ?>
                            <div class="service-single-content pinside30 outline">
                                <h2><?= $service->name ?></h2>
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
                    <?php if (isset($service->price) && !empty($service->price)): ?>
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="price-block outline mb30">
                            <?php if ($service->price_img): ?>
                            <div class="price-img">
                                <img src="<?= $service->getImage('price_img') ?>" class="img-responsive" alt="">
                            </div>
                            <?php endif; ?>
                            <div class="price-content pinside30">
                                <h2 class="price-title mb10"><?= $service->name ?></h2>
                                <p class="mb30"><?= $service->price_description ?></p>
                                <ul class="listnone mb40">
                                    <?php foreach ($service->price as $pr): ?>
                                    <li>
                                        <?= $pr->name ?>
                                        <span class="meta-price">
                                            <?= $pr->from_price ? 'от' : '' ?>
                                            <?= \Yii::$app->formatter->asCurrency($pr->price, 'UAH') ?>
                                        </span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>