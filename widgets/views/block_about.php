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
                            <h1>Welcome to Beauty Salon</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elited pharetra odio vitae velit tristique porta eu et duienean venenatis darius commodo dolor mauris gravida magna vitae lorem one consectetur quam estid estenean enim ante vehicula non mauris massa.</p>
                        <p>Soremun duienean venenatis diam quis varius commodo dolor mauris gravida magna vitae lorem one consectetur quam estid estenean enim ante vehicula non.</p>
                        <div class="text-right">
                            <a href="#" class="btn-link">
                                <?= Yii::t('app', 'Read More') ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pdl40">
                        <h4 class="about-name mb10">- Auenda Odell <span class="about-meta">( CEO )</span></h4>
                        <div class="about-sign"><img src="<?= $assetPath ?>/images/about-sign.png" class="img-responsive" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>