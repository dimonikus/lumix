<?php
/* @var $products \app\models\Products[] */
/* @var $product \app\models\Products */
?>
<?= \app\widgets\HeaderCaptionWidget::widget(['heading_h1' => Yii::t('app', 'Products')]) ?>
<?= \app\widgets\pageBreadcrumbWidget::widget(['links' => [Yii::t('app', 'Products')]]) ?>
<div class="space-medium">
    <div class="container">
        <div class="row row_flex">
            <?php foreach ($products as $product): ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="price-block outline mb30">
                        <?php if (!empty($product->image)): ?>
                        <div class="price-img">
                            <img src="<?= $product->getImage() ?>" class="img-responsive" alt="<?= $product->name ?>">
                        </div>
                        <?php endif; ?>
                        <div class="price-content pinside30">
                            <h2 class="price-title mb10"><?= $product->name ?></h2>
                            <p class="mb30"><?= $product->description ?></p>
                            <ul class="listnone mb40">
                                <li>
                                    <?= $product->title ?>
                                    <span class="meta-price">
                                    <?= $product->from_price ? 'от' : '' ?>
                                    <?= \Yii::$app->formatter->asCurrency($product->price, 'UAH') ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
