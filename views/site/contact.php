<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactPage */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
?>
<?= \app\widgets\HeaderCaptionWidget::widget(['heading_h1' => Yii::t('app', 'Contact')]) ?>
<?= \app\widgets\pageBreadcrumbWidget::widget(['links' => [Yii::t('app', 'Contact')]]) ?>
<div class="space-medium">
    <div class="container">
        <div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="contact-info">
                    <ul class="listnone">
                        <li><i class="icon-placeholder icon-default icon-2x"></i>
                            <address>
                                <?= $model->getAddress() ?>
                            </address>
                        </li>
                        <li><i class=" icon-phone-call icon-default icon-2x"></i>
                            <p><?= $model->getPhone() ?></p>
                        </li>
                        <?php if (!empty($model->mail)): ?>
                        <li><i class="icon-email icon-default icon-2x"></i>
                            <p><?= $model->getMail() ?></p>
                        </li>
                        <?php endif; ?>
                        <?php if (!empty($model->opening_hours)): ?>
                        <li><i class=" icon-clock icon-default icon-2x"></i>
                            <p><?= $model->getOpeningHours() ?></p>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map" id="googleMap"></div>
        </div>
    </div>
</div>

<script>
    function initMap() {
        var myLatLng = {
            lat: 50.451045,
            lng: 30.4963049
        };

        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 17,
            center: myLatLng,
            scrollwheel: false,

        });
        var image = '<?= $assetPath ?>/images/map-pin.png';
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image,
            title: 'Hello World!'

        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?&callback=initMap" async defer></script>