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
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-caption">
                    <h2 class="page-title">Contact us</h2>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-breadcrumb text-center">
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Contact us</li>
    </ol>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget widget-contact">
                    <!-- widget search -->
                    <h3 class="widget-title"><?= Yii::t('app', 'Contact Info') ?></h3>
                    <address>
                        <strong>Киев 01054</strong>
                        <br> Гоголевская 22/24
                        <br>
                        <br> 068 140 3337
                        <br> 044 486 2874
                    </address>
                    <address>
                        <strong>ЧАСЫ РАБОТЫ</strong>
                        <br>понедельник-субб&nbsp;10:00–20:00
                        <br>воскресенье&nbsp;Выходной
                    </address>
                </div>
                <!-- /.widget search -->
                <div class="widget widget-social">
                    <div class="social-circle">
                        <a href="#" class="#"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="#"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1><?= Yii::t('app', 'Contact Form') ?></h1>
                        <p>Пожалуйста, заполните форму ниже. Мы сделаем все возможное, чтобы как можно быстрее ответить вам.</p>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="name">
                                        <?= Yii::t('app', 'Name') ?>
                                    </label>
                                    <input type="text" name="name" id="name" placeholder="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="phone">
                                        <?= Yii::t('app', 'Phone') ?>
                                    </label>
                                    <input type="text" name="phone" id="phone" placeholder="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="email">
                                        <?= Yii::t('app', 'email') ?>
                                    </label>
                                    <input type="text" name="email" id="email" placeholder="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="Subject">
                                        <?= Yii::t('app', 'Subject') ?>
                                    </label>
                                    <input type="text" name="Subject" id="Subject" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">
                                            <?= Yii::t('app', 'Message') ?>
                                        </label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="6" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">
                                            <?= Yii::t('app', 'send message') ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>