<?= \app\widgets\HeaderCaptionWidget::widget(['heading_h1' => Yii::t('app', 'News')]) ?>

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="content">
                    <div class="row">
                        <?php foreach ($news as $model): ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-holder mb30">
                                <?php if (!empty($model->image)): ?>
                                <div class="post-image">
                                    <a href="blog-single.html" class="imghover">
                                        <img src="images/blog-post-1.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <?php endif; ?>
                                <div class="post-content pinside30 outline">
                                    <h2 class="mb20 heading-line">
                                        <a href="blog-single.html" class="title">
                                            <?= $model->name ?>
                                        </a>
                                    </h2>
                                    <div class="meta">
                                        <span class="meta-date">24 December, 2017</span>
                                        <span class="meta-comment">- (10)
                                            <a href="#">comments</a>
                                        </span>
                                    </div>
                                    <p class="mb30"><?= $model->short_description ?></p>
                                    <a href="blog-single.html" class="btn-link">read more</a> </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="st-pagination">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>
                                        </li>
                                        <li><a href="#" class="active">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a>
                                        </li>
                                    </ul>
                                </nav>
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
                                <h3 class="widget-title">
                                    <?= Yii::t('app', 'Categories') ?>
                                </h3>
                                <ul class="listnone pinside40 outline">
                                    <?php foreach ($categories as $url => $name): ?>
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <a href="<?= $url ?>"><?= $name ?></a>
                                    </li>
                                    <?php endforeach; ?>
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
                                                    <a href="#" class="imghover"><img src="images/recent-post-1.jpg" class="img-responsive" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-9">
                                                <h3 class="recent-title"><a href="#" class="title">The Easiest Way to Remove Long Wearing Matte Liquid Lipstick</a></h3>
                                                <div class="meta"><span class="meta-date">24 December,2017</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-block">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-3">
                                                <div class="recent-img">
                                                    <a href="#" class="imghover"><img src="images/recent-post-2.jpg" class="img-responsive" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-9">
                                                <h3 class="recent-title"><a href="#" class="title">Secrets to Get Your Blush to Look as Natural as Possible</a></h3>
                                                <div class="meta"><span class="meta-date">23 December,2017</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-block">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-3">
                                                <div class="recent-img">
                                                    <a href="#" class="imghover"><img src="images/recent-post-3.jpg" class="img-responsive" alt=""></a>
                                                </div>
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
