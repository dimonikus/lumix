<?php
/* @var $model \app\models\BlockPortfolio */

$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;

?>
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div class="mt70">
                    <div class="section-title">
                        <h2 class="heading-line">
                            <?= !empty($model) ? $model->name : '' ?>
                        </h2>
                        <p class="mb40">
                            <?= !empty($model) ? $model->description : '' ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-offest-1 col-lg-8 col-md-offset-1 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 co l-xs-12">
                        <div class="portfoio-img">
                            <a href="<?= !empty($model) ? $model->getUrl($model->service_id_1) : '#' ?>">
                                <img src="<?= !empty($model) ? $model->getImage($model->service_id_1) : '' ?>"
                                     class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="portfoio-img">
                            <a href="<?= !empty($model) ? $model->getUrl($model->service_id_2) : '#' ?>">
                                <img src="<?= !empty($model) ? $model->getImage($model->service_id_2) : '' ?>"
                                     class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="portfoio-img">
                    <a href="<?= !empty($model) ? $model->getUrl($model->service_id_3) : '#' ?>">
                        <img src="<?= !empty($model) ? $model->getImage($model->service_id_3) : '' ?>"
                             class="img-responsive" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="portfoio-img">
                    <a href="<?= !empty($model) ? $model->getUrl($model->service_id_4) : '#' ?>">
                        <img src="<?= !empty($model) ? $model->getImage($model->service_id_4) : '' ?>"
                             class="img-responsive" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="portfoio-img">
                    <a href="<?= !empty($model) ? $model->getUrl($model->service_id_5) : '#' ?>">
                        <img src="<?= !empty($model) ? $model->getImage($model->service_id_5) : '' ?>"
                             class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>