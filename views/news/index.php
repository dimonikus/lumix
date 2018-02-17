<?php
/* @var $service \app\modules\admin\models\Service */
/* @var $services object */
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
$newsPath = Yii::$app->urlManager->createUrl('/news/index') . '/';
?>

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
                                    <a href="<?= $newsPath . $model->url ?>" class="imghover">
                                        <img src="images/blog-post-1.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <?php endif; ?>
                                <div class="post-content pinside30 outline">
                                    <h2 class="mb20 heading-line">
                                        <a href="<?= $newsPath . $model->url ?>" class="title">
                                            <?= $model->name ?>
                                        </a>
                                    </h2>
                                    <div class="meta">
                                        <span class="meta-date">
                                            <?= Yii::$app->formatter->asDate($model->date, 'long') ?>
                                        </span>
<!--                                        <span class="meta-comment">- (10)-->
<!--                                            <a href="#">comments</a>-->
<!--                                        </span>-->
                                    </div>
                                    <p class="mb30"><?= $model->short_description ?></p>
                                    <a href="<?= $newsPath . $model->url ?>" class="btn-link">
                                        <?= Yii::t('app', 'Read More') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                            <div class="st-pagination">-->
<!--                                <nav aria-label="Page navigation">-->
<!--                                    <ul class="pagination">-->
<!--                                        <li>-->
<!--                                            <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>-->
<!--                                        </li>-->
<!--                                        <li><a href="#" class="active">1</a></li>-->
<!--                                        <li><a href="#">2</a></li>-->
<!--                                        <li><a href="#">3</a></li>-->
<!--                                        <li>-->
<!--                                            <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </nav>-->
<!--                            </div>-->
<!--                        </div>-->
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
                                    <?php foreach (\app\models\News::getCategories() as $url => $name): ?>
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <a href="<?= '/news/category/' . $url ?>"><?= $name ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-recent-post">
                                <h3 class="widget-title">
                                    <?= Yii::t('app', 'Recent Post') ?>
                                </h3>
                                <div class="listnone pinside40 outline">
                                    <?php
                                        $rPost = \app\models\News::getRecentPost();
                                        if(!empty($rPost)):
                                            foreach ($rPost as $post):
                                    ?>
                                    <div class="recent-block">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-3">
                                                <div class="recent-img">
                                                    <a href="<?= $newsPath . $post->url ?>" class="imghover">
                                                        <img src="images/recent-post-1.jpg"
                                                             class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-9">
                                                <h3 class="recent-title">
                                                    <a href="<?= $newsPath . $post->url ?>" class="title">
                                                        <?= $post->getShortDescription() ?>
                                                    </a>
                                                </h3>
                                                <div class="meta">
                                                    <span class="meta-date">
                                                        <?= Yii::$app->formatter->asDate($post->date, 'long') ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget widget-archives">
                                <h3 class="widget-title">
                                    <?= Yii::t('app', 'Archives') ?>
                                </h3>
                                <ul class="listnone pinside40 outline">
                                    <?php
                                    $dates = \app\models\News::getNewsDate();
                                    foreach ($dates as $key => $date):
                                    ?>
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <a href="<?= '/news/date/' . $key ?>">
                                            <?= Yii::$app->formatter->asDate($date, 'php:F') ?>
                                        </a>
                                        <strong>
                                            (<?= Yii::$app->formatter->asDate($date, 'php:Y') ?>)
                                        </strong>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
