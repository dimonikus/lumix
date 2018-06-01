<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
$contact = \app\models\ContactPage::find()->one();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="animsition">
<?php $this->beginBody() ?>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="logo">
                    <a href="<?= Yii::$app->homeUrl ?>">
                        <img src="<?=$assetPath?>/images/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="call-block">
                            <h3 class="call-no"><?= \app\models\ContactPage::getMainPhone() ?></h3>
                            <p class="call-text">
                                <?= Yii::t('app', 'Need any help') ?>?
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6">
                        <div class="time-block">
                            <h3 class="time"><?= \app\models\ContactPage::getMainOpen() ?></h3>
                            <p class="call-text">
                                <?= Yii::t('app', 'Opening Timing') ?>
                            </p>
                        </div>
                    </div>
                    <?php /*
<!--                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">-->
<!--                        <div class="top-btn"> <a href="contact.html" class="btn btn-default">Make Appointment</a> </div>-->
<!--                    </div>-->
                    */ ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navigation-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="navigation align-center" id="navigation">
                    <ul>
                        <li class="active">
                            <a href="<?= Yii::$app->homeUrl ?>"
                               title="<?= Yii::t('app', 'Home') ?>"
                               class="animsition-link">
                                <?= Yii::t('app', 'Home') ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to('/service') ?>"
                               title="<?= Yii::t('app', 'Service List') ?>"
                               class="animsition-link">
                                <?= Yii::t('app', 'Service List') ?>
                            </a>
                            <ul>
                                <?= \app\modules\admin\models\Service::getMenuItem() ?>
<!--                                <li><a href="service-list.html" title="Service List">Service List</a></li>-->
<!--                                <li><a href="service-detail.html" title="Service Detail">Service Detail</a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Url::to('/news') ?>"
                               title="<?= Yii::t('app', 'News') ?>"
                               class="animsition-link">
                                <?= Yii::t('app', 'News') ?>
                            </a>
<!--                            <ul>-->
<!--                                <li><a href="blog-default.html" title="Blog" class="animsition-link">Blog Default</a></li>-->
<!--                                <li><a href="blog-single.html" title="Blog Single" class="animsition-link">Blog Single</a></li>-->
<!--                            </ul>-->
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               title="<?= Yii::t('app', 'Portfolio') ?>"
                               class="animsition-link">
                                <?= Yii::t('app', 'Portfolio') ?>
                            </a>
                            <ul>
                                <?= \app\models\Images::getMenuItem() ?>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Url::to('/products') ?>"
                               title="<?= Yii::t('app', 'Products') ?>"
                               class="animsition-link">
                                <?= Yii::t('app', 'Products') ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to('/price') ?>"
                               title="<?= Yii::t('app', 'Pricing') ?>"
                               class="animsition-link">
                                <?= Yii::t('app', 'Pricing') ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to('/contact') ?>"
                               title="<?= Yii::t('app', 'Contact') ?>"
                               class="animsition-link">
                                <?= Yii::t('app', 'Contact') ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $content ?>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <div class="logo mb30">
                        <a href="<?= Yii::$app->getHomeUrl() ?>">
                            <img src="<?=$assetPath?>/images/logo.png" class="img-responsive" alt="">
                        </a>
                    </div>
<!--                    <p class="mb30"></p>-->
<!--                    <div class="footer-social">-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-twitter"></i>-->
<!--                        </a>-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-facebook"></i>-->
<!--                        </a>-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-google-plus"></i>-->
<!--                        </a>-->
<!--                    </div>-->
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget footer-contact">
                    <h2 class="footer-title"><?= Yii::t('app', 'Contact Info') ?></h2>
                    <ul class="listnone">
                        <li>
                            <div class="row">
                                <div class="col-md-2"><i class="fa fa-phone"></i></div>
                                <div class="col-md-10">
                                    <h4 class="call-no">
                                        <a href="<?= Url::to('/contact') ?>">
                                            <?= $contact->getPhone() ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2"><i class="fa fa-envelope-o"></i></div>
                                <div class="col-md-10">
                                    <h4 class="mail-text">
                                        <a href="<?= Url::to('/contact') ?>">
                                            <?= $contact->getMail() ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2"><i class="fa fa-clock-o"></i></div>
                                <div class="col-md-10">
                                    <h4 class="time-text">
                                        <a href="<?= Url::to('/contact') ?>">
                                            <?= $contact->getOpeningHours() ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h2 class="footer-title"><?= Yii::t('app', 'Quick Links') ?></h2>
                    <ul class="listnone">
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="<?= Yii::$app->getHomeUrl() ?>">
                                <?= Yii::t('app', 'Home') ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="<?= Url::to('/service') ?>">
                                <?= Yii::t('app', 'Service List') ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="<?= Url::to('/price') ?>">
                                <?= Yii::t('app', 'Pricing') ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="<?= Url::to('/contact') ?>">
                                <?= Yii::t('app', 'Contact') ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tiny-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Copyrights@2017 | All Rights Reserve</div>
        </div>
    </div>
</div>
<a href="#0" class="cd-top" title="Go to top">Top</a>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        var widget_id = 'j347mDSHts';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();</script>
<!-- {/literal} END JIVOSITE CODE -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
