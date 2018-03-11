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
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bg-primary pinside40">
                <div class="contact-info">
                    <div class="logo mb40">
                        <a href="<?= Yii::$app->getHomeUrl() ?>">
                            <img src="<?= $assetPath ?>/images/logo.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <ul class="listnone">
                        <li><i class="icon-placeholder icon-secondary icon-2x"></i>
                            <address>
                                <?= $model->getAddress() ?>
                            </address>
                        </li>
                        <li><i class=" icon-phone-call icon-secondary icon-2x"></i>
                            <p><?= $model->getPhone() ?></p>
                        </li>
                        <?php if (!empty($model->mail)): ?>
                        <li><i class="icon-email icon-secondary icon-2x"></i>
                            <p><?= $model->getMail() ?></p>
                        </li>
                        <?php endif; ?>
                        <?php if (!empty($model->opening_hours)): ?>
                        <li><i class=" icon-clock icon-secondary icon-2x"></i>
                            <p><?= $model->getOpeningHours() ?></p>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 outline pinside40">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2><?= Yii::t('app', 'Contact Form') ?></h2>
                    </div>
                </div>
                <div class="row">
                    <form>
                        <!-- Textarea -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name">
                                    <?= Yii::t('app', 'Name') ?> :
                                </label>
                                <span class="d-inline-block tooltip_message"
                                      tabindex="0" data-toggle="tooltip" id="tt_name">
                                    <input name="name" type="text" class="form-control" placeholder=" " required>
                                </span>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class=" control-label" for="email">
                                    <?= Yii::t('app', 'email') ?> :
                                </label>
                                <span class="d-inline-block tooltip_message"
                                      tabindex="0" data-toggle="tooltip" id="tt_email">
                                    <input name="email" type="text" class="form-control" placeholder=" " required>
                                </span>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class=" control-label" for="phone">
                                    <?= Yii::t('app', 'Phone') ?> :
                                </label>
                                <span class="d-inline-block tooltip_message"
                                      tabindex="0" data-toggle="tooltip" id="tt_phone">
                                    <input name="phone" type="text" class="form-control" placeholder=" ">
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class=" control-label" for="subject">
                                    <?= Yii::t('app', 'Subject') ?> :
                                </label>
                                <input name="subject" type="text" class="form-control" placeholder=" " required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="message">
                                    <?= Yii::t('app', 'Message') ?> :
                                </label>
                                <span class="d-inline-block tooltip_message"
                                      tabindex="0" data-toggle="tooltip" id="tt_message">
                                    <textarea class="form-control" name="message" rows="6" placeholder=" "></textarea>
                                </span>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <a href="" id="send_btn" name="send_btn" class="btn btn-default">
                                    <?= Yii::t('app', 'send message') ?>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
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