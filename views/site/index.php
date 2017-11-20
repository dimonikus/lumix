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
                                <h2 class="service-title"><a href="service-list.html" class="title">Hair Style</a></h2>
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
<div class="space-medium bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div class="mt20">
                    <div class="section-title">
                        <h1 class="heading-line">Our Customer’s Reviews</h1>
                        <p class="mb40">Nulla necvenenatis lectus sitamet is convallis nisnteger libero velit lorem egestas sitmet digneu tellus. </p>
                        <a href="testimonial.html" class="btn btn-default">view reviews</a> </div>
                </div>
            </div>
            <div class="col-lg-offest-1 col-lg-8 col-md-offset-1 col-md-8 col-sm-12 col-xs-12">
                <div id="testimonial" class="testimonial">
                    <div class="testimonial-block pinside40 outline bg-white mb30">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="testimonial-content"> <span class="quote-left">“</span>
                                    <h1 class="testimonial-title">Professional Salon</h1>
                                    <div class="testimonial-text">
                                        <p>“It is a very professional salon with excellent results, this staff work hard to make every visit a beautifully, i look forword to and enjoy my visit.”</p>
                                    </div>
                                    <h3 class="testimonial-name">- Susan Blake</h3>
                                    <h6 class="testimonial-meta">Customer</h6>
                                </div>
                            </div>
                            <div class="col-lg-offset-1 col-lg-4 col-md-offset-1  col-md-4 col-sm-5 col-xs-12">
                                <div class="testimonial-img"><img src="<?= $assetPath ?>/images/testimonial-1.jpg" class="img-responsive" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block pinside40 outline bg-white mb30">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="testimonial-content"><span class="quote-left">“</span>
                                    <h1 class="testimonial-title">Fantastic Treatment</h1>
                                    <div class="testimonial-text">
                                        <p>“Not only do you get a fantastic treatment but you are also valued and cared for. The best beauty salon I've been to I am happy to recomend to anyone”</p>
                                    </div>
                                    <h3 class="testimonial-name">- Isabel Enlow</h3>
                                    <h6 class="testimonial-meta">Customer</h6>
                                </div>
                            </div>
                            <div class="col-lg-offset-1 col-lg-4 col-md-offset-1  col-md-4 col-sm-5 col-xs-12">
                                <div class="testimonial-img"><img src="<?= $assetPath ?>/images/testimonial-2.jpg" class="img-responsive" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block pinside40 outline bg-white mb30">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="testimonial-content"><span class="quote-left">“</span>
                                    <h1 class="testimonial-title">Feeling Relaxed</h1>
                                    <div class="testimonial-text">
                                        <p>“I always come out of Beauty Salon feeling relaxed and calm, & able to face whatever the world wants to throw at me! thank you beauty salon”</p>
                                    </div>
                                    <h3 class="testimonial-name">- Kathy Parks</h3>
                                    <h6 class="testimonial-meta">Customer</h6>
                                </div>
                            </div>
                            <div class="col-lg-offset-1 col-lg-4 col-md-offset-1  col-md-4 col-sm-5 col-xs-12">
                                <div class="testimonial-img"><img src="<?= $assetPath ?>/images/testimonial-3.jpg" class="img-responsive" alt=""></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
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
                <div class="section-title">
                    <h1 class="heading-line">Beauty Salon Beauticians</h1>
                    <p class="mb40">Donec felis ligula iaulis vitaeue lorem placeffcitur a torto nulla velit variusa tortor ethendrerit ipsum.</p>
                    <a href="#" class="btn btn-default">View beauticians</a></div>
            </div>
            <div class="col-lg-offest-1 col-lg-8 col-md-offset-1 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="team-block mb30">
                            <figure class="imghvr-fade">
                                <div class="team-img"><img src="<?= $assetPath ?>/images/team-1.jpg" class="img-responsive" alt=""></div>
                                <figcaption>
                                    <div class="team-info">
                                        <h2 class="team-name">Connie Jenkins</h2>
                                        <h6 class="team-meta">Makeup Specialist</h6>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="team-block mb30">
                            <figure class="imghvr-fade">
                                <div class="team-img"><img src="<?= $assetPath ?>/images/team-2.jpg" class="img-responsive" alt=""></div>
                                <figcaption>
                                    <div class="team-info">
                                        <h2 class="team-name">Ethel Kinney</h2>
                                        <h6 class="team-meta">Hairstyle Specialist</h6>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-medium bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="post-holder bg-white pinside40 mb30">
                    <div class="post-content">
                        <h1 class="heading-line post-title"><a href="blog-default.html" class="title">Ask Your Wedding Stylist for These Fall Hair Trends</a></h1>
                        <div class="meta"><span class="meta-date">25  December, 2017</span></div>
                        <p>Lorem ipsum dolor sitameconsectetur adipiscing uspendisse volutpatfelis...</p>
                        <a href="blog-default.html" class="btn-link">
                            <?= Yii::t('app', 'Read More') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="post-holder bg-white pinside40 mb30">
                    <div class="post-content">
                        <h1 class="heading-line post-title"><a href="blog-default.html" class="title">The Easiest Way to Remove Long-Wearing Matte Lipstick</a></h1>
                        <div class="meta"><span class="meta-date">24  December, 2017</span></div>
                        <p>Vivamus lorem tellu cursus eudui varius condimentum nuncm ultrices...</p>
                        <a href="blog-default.html" class="btn-link">
                            <?= Yii::t('app', 'Read More') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="post-holder bg-white pinside40 mb30">
                    <div class="post-content">
                        <h1 class="heading-line post-title">
                            <a href="blog-default.html" class="title">
                                Secrets to Get Your Blush to Look as Natural as Possible
                            </a>
                        </h1>
                        <div class="meta">
                            <span class="meta-date">
                                23  December, 2017
                            </span>
                        </div>
                        <p>Cras pharetra turpis eget egesta poneces sitamet purus uluctus urnau...</p>
                        <a href="blog-default.html" class="btn-link">
                            <?= Yii::t('app', 'Read More') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1 class="heading-line">Sign Up our Newsletter</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="mb40">
                    <p>Sign up for our newsletter and receive exclusive stories, breaking news, alerts and much more straight to your inbox!</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter your emil address">
                    <span class="input-group-btn"> <a href="#" class="btn btn-default">Subscribe</a> </span> </div>
                <!-- /input-group -->
            </div>
        </div>
    </div>
</div>
