<?php
/**
 * @var \app\models\Images $images[]
 */
?>

<?= \app\widgets\HeaderCaptionWidget::widget(['heading_h1' => Yii::t('app', 'Portfolio')]) ?>

<div class="space-medium">
    <div class="container">
        <div class="row row_flex">
            <?php foreach ($images as $image): ?>
            <div class="col-lg-4 col-md-4 col-sm-6 co l-xs-12">
                <div class="portfoio-img">
                    <a href="#" class="imghover">
                        <img src="<?= $image->getImagePath() ?>"
                             class="img-responsive"
                             alt=""
                        >
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
