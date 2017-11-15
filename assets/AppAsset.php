<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/imagehover.min.css',
        'css/owl.theme.css',
        'css/owl.carousel.css',
        'css/font-awesome.min.css',
        'css/style.css',
//        'css/animsition.min.css',
        'css/fontello.css',
    ];
    public $js = [
        'js/menumaker.js',
        'js/animsition.js',
        'js/animsition-script.js',
        'js/jquery.sticky.js',
        'js/sticky-header.js',
        'js/owl.carousel.min.js',
        'js/testimonial-carousel.js',
        "js/back-to-top.js",
//        "js/bootstrap.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
