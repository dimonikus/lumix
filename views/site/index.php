<?php
use \yii\helpers\Url;
use app\widgets\ServicesBlockWidget;
use app\widgets\AboutBlockWidget;
use app\widgets\BestPricesWidget;
use app\widgets\PortfoliosBlockWidget;
/* @var $this yii\web\View */
/* @var $model \app\models\MainBlocks[] */

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

<?php
foreach ($model as $block) {
    switch ($block->widget_name) {
        case 'ServicesBlockWidget':
            echo ServicesBlockWidget::widget();
            break;
        case 'AboutBlockWidget':
            echo AboutBlockWidget::widget();
            break;
        case 'BestPricesWidget':
            echo BestPricesWidget::widget();
            break;
        case 'PortfoliosBlockWidget':
            echo PortfoliosBlockWidget::widget();
            break;
    }
}
?>
