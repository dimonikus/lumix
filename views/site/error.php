<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
$assetPath = Yii::$app->assetManager->getBundle('app\assets\AppAsset', true)->baseUrl;
?>


<div class="space-medium">
    <div class="container">
        <div class="site-error">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h1 class="text-jumbo text-ginormous">Oops!</h1>
                <h2>Страница не найдена!</h2>
                <ul class="list-unstyled">
                    <li>Вот несколько полезных ссылок:</li>
                    <li>
                        <i class="fa fa-caret-right"></i>
                        <a href="<?= Yii::$app->getHomeUrl() ?>">
                            <?= Yii::t('app', 'Home') ?>
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-caret-right"></i>
                        <a href="<?= Url::to('/service') ?>">
                            <?= Yii::t('app', 'Service List') ?>
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-caret-right"></i>
                        <a href="<?= Url::to('/price') ?>">
                            <?= Yii::t('app', 'Pricing') ?>
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-caret-right"></i>
                        <a href="<?= Url::to('/contact') ?>">
                            <?= Yii::t('app', 'Contact') ?>
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-caret-right"></i>
                        <a href="<?= Url::to(['/site/sitemap']) ?>">
                            Карта сайта
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <img src="<?= $assetPath ?>/images/404-page.gif" width="313" height="428"
                     alt="Girl has dropped her ice cream.">
            </div>
        </div>
    </div>

</div>
