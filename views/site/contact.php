<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-header page-caption">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-title"><?= Yii::t('app', 'Contact') ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bg-primary pinside40">
                <div class="contact-info">
                    <div class="logo mb40"> <a href="index.html"><img src="/images/logo-white.png" class="img-responsive" alt=""></a> </div>
                    <ul class="listnone">
                        <li><i class="icon-placeholder icon-secondary icon-2x"></i>
                            <address>
                                <strong>Киев 01054</strong>
                                <br> Гоголевская 22/24
                            </address>
                        </li>
                        <li><i class=" icon-phone-call icon-secondary icon-2x"></i>
                            <p>068 140 3337</p>
                        </li>
                        <li><i class="icon-email icon-secondary icon-2x"></i>
                            <p>beautysalon@gmail.com</p>
                        </li>
                        <li><i class=" icon-clock icon-secondary icon-2x"></i>
                            <p>понедельник-субб&nbsp;10:00–20:00</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 outline pinside40">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1><?= Yii::t('app', 'Contact Form') ?></h1>
                    </div>
                </div>
                <div class="row">
                    <form>
                        <!-- Textarea -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name"><?= Yii::t('app', 'Name') ?> :</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder=" " required>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class=" control-label" for="email"><?= Yii::t('app', 'email') ?> :</label>
                                <input id="email" name="email" type="text" class="form-control" placeholder=" " required>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class=" control-label" for="phone"><?= Yii::t('app', 'Phone') ?> :</label>
                                <input id="phone" name="phone" type="text" class="form-control" placeholder=" " required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class=" control-label" for="subject"><?= Yii::t('app', 'Subject') ?> :</label>
                                <input id="subject" name="subject" type="text" class="form-control" placeholder=" " required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class=" control-label" for="textarea"><?= Yii::t('app', 'Message') ?> :</label>
                                <textarea class="form-control" id="textarea" name="textarea" rows="6" placeholder=" "></textarea>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <a href="" id="singlebutton" name="singlebutton" class="btn btn-default">
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
        var image = '/images/map-pin.png';
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