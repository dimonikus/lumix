<?php
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
?>
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div class="mt70">
                    <div class="section-title">
                        <h1 class="heading-line">Our Portfolios</h1>
                        <p class="mb40">Nulla necvenenatis lectus sitamet is convallis nisnteger libero velit lorem
                            egestas sitmet digneu tellus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-offest-1 col-lg-8 col-md-offset-1 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 co l-xs-12">
                        <div class="portfoio-img">
                            <a href="#" class="imghover">
                                <img src="<?= $assetPath ?>/images/portfolio-1.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="portfoio-img">
                            <a href="#" class="imghover">
                                <img src="<?= $assetPath ?>/images/portfolio-2.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="portfoio-img">
                    <a href="#" class="imghover">
                        <img src="<?= $assetPath ?>/images/portfolio-4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="portfoio-img">
                    <a href="#" class="imghover">
                        <img src="<?= $assetPath ?>/images/portfolio-4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="portfoio-img">
                    <a href="#" class="imghover">
                        <img src="<?= $assetPath ?>/images/portfolio-4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>