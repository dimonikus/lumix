<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $services object */
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
$servicePath = Yii::$app->urlManager->createUrl('/service/index') . '/';
$classAndStyle = 'class="not-visible-price" style="display: none"';
?>
<?= \app\widgets\HeaderCaptionWidget::widget(['heading_h1' => Yii::t('app', 'Pricing')]) ?>
<?= \app\widgets\pageBreadcrumbWidget::widget(['links' => [Yii::t('app', 'Pricing')]]) ?>
<div class="space-medium">
    <div class="container">
        <div class="row row_flex">
            <?php foreach ($services as $service): $count = 0; ?>
            <?php if (isset($service->price) && !empty($service->price)): ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                                <?php $count++ ?>
                            <li <?= $count > 7 ? $classAndStyle : '' ?>>
                                <?= $pr->name ?>
                                <span class="meta-price">
                                    <?= $pr->from_price ? 'от' : '' ?>
                                    <?= \Yii::$app->formatter->asCurrency($pr->price, 'UAH') ?>
                                </span>
                            </li>
                            <?php endforeach; ?>
                            <?php if ($count > 7): ?>
                            <div class="text-right btn-link tog_btn">
                                весь прайс
                            </div>
                            <?php endif; ?>
                        </ul>
                        <div class="text-center">
                            <a href="<?= $servicePath . $service->url ?>" class="btn btn-default">
                                подробнее об услуге
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
