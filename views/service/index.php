<?php
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
?>
<div class="page-header page-caption">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-title">Beauty Saloon Services</h1>
            </div>
        </div>
    </div>
</div>

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-block mb30 outline">
                    <div class="service-caption pinside40">
                        <h2 class="service-title"><a href="service-detail.html" class="title">Hair Style</a></h2>
                        <p class="mb40">Cras auctor laoreet duid temsem cursus sedenean elementumest vitae.</p>
                        <a href="service-detail.html" class="btn-link">Read More </a> </div>
                    <div class="service-img"> <img src="<?= $assetPath ?>/images/service-1.jpg" class="img-responsive" alt=""> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-block mb30 outline">
                    <div class="service-caption pinside40">
                        <h2 class="service-title"><a href="service-detail.html" class="title">Makeup</a></h2>
                        <p class="mb40">Maecenas sitamet venenatis nulla eget lobortis loreduis lorem eget nulla.</p>
                        <a href="service-detail.html" class="btn-link">Read More </a> </div>
                    <div class="service-img"> <img src="<?= $assetPath ?>/images/service-2.jpg" class="img-responsive" alt=""> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-block mb30 outline">
                    <div class="service-caption pinside40">
                        <h2 class="service-title"><a href="service-detail.html" class="title">Facial</a></h2>
                        <p class="mb40">Maecenas sitamet venenatis nulla eget lobortis loreduis lorem eget nulla.</p>
                        <a href="service-detail.html" class="btn-link">Read More </a> </div>
                    <div class="service-img"> <img src="<?= $assetPath ?>/images/service-3.jpg" class="img-responsive" alt=""> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-block mb30 outline">
                    <div class="service-caption pinside40">
                        <h2 class="service-title"><a href="service-detail.html" class="title">Nail Polish</a></h2>
                        <p class="mb40">Maecenas sitamet venenatis nulla eget lobortis loreduis lorem eget nulla.</p>
                        <a href="service-detail.html" class="btn-link">Read More </a> </div>
                    <div class="service-img"> <img src="<?= $assetPath ?>/images/service-4.jpg" class="img-responsive" alt=""></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-block mb30 outline">
                    <div class="service-caption pinside40">
                        <h2 class="service-title"><a href="service-detail.html" class="title">Waxing</a></h2>
                        <p class="mb40">Cras auctor laoreet duid temsem cursus sedenean elementumest vitae.</p>
                        <a href="service-detail.html" class="btn-link">Read More </a> </div>
                    <div class="service-img"><img src="<?= $assetPath ?>/images/service-5.jpg" class="img-responsive" alt=""></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-block mb30 outline">
                    <div class="service-caption pinside40">
                        <h2 class="service-title"><a href="service-detail.html" class="title">Body Massage</a></h2>
                        <p class="mb40">Maecenas sitamet venenatis nulla eget lobortis loreduis lorem eget nulla.</p>
                        <a href="service-detail.html" class="btn-link">Read More </a> </div>
                    <div class="service-img"><img src="<?= $assetPath ?>/images/service-6.jpg" class="img-responsive" alt=""> </div>
                </div>
            </div>
        </div>
    </div>
</div>
