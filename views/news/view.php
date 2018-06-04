<?php
$this->params['breadcrumbs'][] = [
    'label' => Yii::t('app', 'News'), // название ссылки
    'url' => ['/news'] // сама ссылка
];
$this->params['breadcrumbs'][] = ['label' => $news->name];
?>
<?= \app\widgets\HeaderCaptionWidget::widget(['heading_h1' => Yii::t('app', 'News')]) ?>
<?= \app\widgets\pageBreadcrumbWidget::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="post-holder mb30">
                            <div class="post-image">
                                <?php if (!empty($news->image)): ?>
                                <img src="images/blog-post-1.jpg" class="img-responsive" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="post-content pinside30 outline">
                                <div class="mb60">
                                    <h2 class="mb20 heading-line"><?= $news->name ?></h2>
                                    <div class="meta">
                                        <span class="meta-date">
                                            <?= Yii::$app->formatter->asDate($news->date, 'long') ?>
                                        </span>
<!--                                        <span class="meta-comment">- (10)-->
<!--                                            <a href="#">comments</a>-->
<!--                                        </span>-->
                                    </div>
                                    <p><?= $news->description ?></p>
                                </div>
                                <div class="bdr-btm"></div>
                                <div class="mb30">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                            <h6 class="mb0 pinside10">SHARE</h6>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 ">
                                            <div class="social pull-right">
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bdr-btm"></div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h1 class="section-title">Related Post</h1>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="related-block mb30">
                                            <div class="related-img mb30"><a href="#" class="imghover"><img src="images/related-img-1.jpg" class="img-responsive" alt=""></a></div>
                                            <h4 class="related-title"><a href="#" class="title">The Easiest Way to Remove Long Wearing Matte Liquid Lipstick</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="related-block mb30">
                                            <div class="related-img mb30"><a href="#" class="imghover"><img src="images/related-img-2.jpg" class="img-responsive" alt=""></a></div>
                                            <h4 class="related-title"><a href="#" class="title">Secrets to Get Your Blush to Look as Natural as Possible</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="bdr-btm"></div>
                                <div class="next-prev-post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="prev-post">
                                                <h5 class="prev-link"><a href="#" class="btn-link title">Previous Post</a></h5>
                                                <h4 class="prev-next-title"><a href="#" class="title">The Easiest Way to Remove Long Wearing Matte Liquid Lipstick</a></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="next-post">
                                                <h5 class="next-link"><a href="#" class="btn-link title">Next Post</a></h5>
                                                <h4 class="next-prev-title"><a href="#" class="title">Secrets to Get Your Blush to Look as Natural as Possible</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                <div class="bdr-btm"></div>-->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-categories">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="listnone pinside40 outline">
                                    <li><i class="fa fa-caret-right"></i> <a href="#">Hair Style</a></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">Makeup</a></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">Facial</a></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">Waxing</a></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">Body Massage</a></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">Nail polish</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-recent-post">
                                <h3 class="widget-title">Recent Post</h3>
                                <div class="listnone pinside40 outline">
                                    <div class="recent-block">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-3">
                                                <div class="recent-img">
                                                    <a href="#" class="imghover">
                                                        <img src="images/recent-post-1.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-9">
                                                <h3 class="recent-title">
                                                    <a href="#" class="title">
                                                        The Easiest Way to Remove Long Wearing Matte Liquid Lipstick
                                                    </a>
                                                </h3>
                                                <div class="meta">
                                                    <span class="meta-date">
                                                        24 December,2017
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-block">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-3">
                                                <div class="recent-img">
                                                    <a href="#" class="imghover">
                                                        <img src="images/recent-post-2.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-9">
                                                <h3 class="recent-title">
                                                    <a href="#" class="title">
                                                        Secrets to Get Your Blush to Look as Natural as Possible
                                                    </a>
                                                </h3>
                                                <div class="meta">
                                                    <span class="meta-date">
                                                        23 December,2017
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-block">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-3">
                                                <div class="recent-img"><a href="#" class="imghover"><img src="images/recent-post-3.jpg" class="img-responsive" alt=""></a></div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-9">
                                                <h3 class="recent-title"><a href="#" class="title">Ask Your Wedding Stylist for These Fall Hair Trends</a></h3>
                                                <div class="meta"><span class="meta-date">22 December,2017</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-archives">
                                <h3 class="widget-title">archives</h3>
                                <ul class="listnone pinside40 outline">
                                    <li><i class="fa fa-caret-right"></i> <a href="#">March</a> <strong>(2016)</strong></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">February</a> <strong>(2016)</strong></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">January</a> <strong>(2016)</strong></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">December</a> <strong>(2015)</strong></li>
                                    <li><i class="fa fa-caret-right"></i> <a href="#">November</a> <strong>(2015)</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
