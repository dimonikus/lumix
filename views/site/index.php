<?php
use \yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
?>
<div class="hero-section">
    <!-- navigation -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="hero-caption">
                    <h1 class="hero-title">Looking Professional Beauty Salon?</h1>
                    <p class="hero-text">Beauty salon provide you wide range of beauty services like Facial, hair style, waxing, makeup etc...Beauty salon provide you wide range of beauty services like Facial, hair style, waxing, makeup etc...</p>
                    <a href="<?= Url::to('/service') ?>" class="btn btn-default">
                        <?= Yii::t('app', 'view services') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="cta-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                <h1 class="cta-title mb20">Looking Beauty & Healthy @ our Best Prices</h1>
                <p class="mb40 cta-content hidden-xs">We offer a wide range of beauty care treatments, so you can easily choose the right one.</p>
                <a href="pricing.html" class="btn btn-primary">View Pricing</a></div>
        </div>
    </div>
</div>
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div class="mt70">
                    <div class="section-title">
                        <h1 class="heading-line">Our Portfolios</h1>
                        <p class="mb40">Nulla necvenenatis lectus sitamet is convallis nisnteger libero velit lorem egestas sitmet digneu tellus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-offest-1 col-lg-8 col-md-offset-1 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 co l-xs-12">
                        <div class="portfoio-img"> <a href="#" class="imghover"><img src="<?= $assetPath ?>/images/portfolio-1.jpg" class="img-responsive" alt=""></a> </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="portfoio-img"> <a href="#" class="imghover"><img src="<?= $assetPath ?>/images/portfolio-2.jpg" class="img-responsive" alt=""></a> </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="portfoio-img"> <a href="#" class="imghover"><img src="<?= $assetPath ?>/images/portfolio-3.jpg" class="img-responsive" alt=""></a> </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="portfoio-img"> <a href="#" class="imghover"><img src="<?= $assetPath ?>/images/portfolio-4.jpg" class="img-responsive" alt=""></a> </div>
            </div>
        </div>
    </div>
</div>
