<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
<body>
<?php $this->beginBody() ?>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="index.html"><img src="images/logo.png" alt="Hair Salon Website Templates Free Download"></a>
            </div>
            <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                <div class="navigation">
                    <div id="navigation">
                        <ul>
                            <li class="active"><a href="index.html" title="Home">Home</a></li>
                            <li class="has-sub"><a href="service-list.html" title="Service List">Service List</a>
                                <ul>
                                    <li><a href="service-list.html" title="Service List">Service List</a></li>
                                    <li><a href="service-detail.html" title="Service Detail">Service Detail</a></li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="blog-default.html" title="Blog ">News</a>
                                <ul>
                                    <li><a href="blog-default.html" title="Blog">Blog Default</a></li>
                                    <li><a href="blog-single.html" title="Blog Single ">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Features">Features</a>
                                <ul>
                                    <li><a href="testimonial.html" title="Service List">Testimonial</a></li>
                                    <li><a href="styleguide.html" title="Service Detail">Style Guide</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html" title="Contact Us">Contact</a> </li>
                            <li><a href="styleguide.html" title="Styleguide">styleguide</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $content ?>
<div class="footer">
    <!-- footer-->
    <div class="container">
        <div class="footer-block">
            <!-- footer block -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Salon Address</h2>
                        <ul class="listnone contact">
                            <li><i class="fa fa-map-marker"></i> 4958 Norman Street Los Angeles, CA 90042 </li>
                            <li><i class="fa fa-phone"></i> +00 (800) 123-4567</li>
                            <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
                            <li><i class="fa fa-envelope-o"></i> info@salon.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget footer-social">
                        <!-- social block -->
                        <h2 class="widget-title">Social Feed</h2>
                        <ul class="listnone">
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i> Linked In</a></li>
                            <li>
                                <a href="#"> <i class="fa fa-youtube"></i>Youtube</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.social block -->
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="footer-widget widget-newsletter">
                        <!-- newsletter block -->
                        <h2 class="widget-title">Newsletters</h2>
                        <p>Enter your email address to receive new patient information and other useful information right to your inbox.</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Subscribe</button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- newsletter block -->
                </div>
            </div>
            <div class="tiny-footer">
                <!-- tiny footer block -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright-content">
                            <p>© Men Salon 2020 | all rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tiny footer block -->
        </div>
        <!-- /.footer block -->
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
