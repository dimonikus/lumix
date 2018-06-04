<?php
namespace app\widgets;

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

class pageBreadcrumbWidget extends Breadcrumbs
{
    public function run()
    {
        echo Html::beginTag('div', ['class' => 'page-breadcrumb']);
        echo Html::beginTag('div', ['class' => 'container']);
        echo Html::beginTag('div', ['class' => 'row']);
        echo Html::beginTag('div', ['class' => 'col-lg-12 col-md-12 col-sm-12 col-xs-12']);
        parent::run();
        echo Html::endTag('div');
        echo Html::endTag('div');
        echo Html::endTag('div');
        echo Html::endTag('div');
    }
}
