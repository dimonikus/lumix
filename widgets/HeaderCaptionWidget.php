<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 24.12.2017
 * Time: 22:50
 */

namespace app\widgets;

use yii\helpers\Html;
use yii\base\Widget;

class HeaderCaptionWidget extends Widget
{
    public $heading_h1 = '';

    public function run()
    {
        echo Html::beginTag('div', ['class' => 'page-header page-caption']);
        echo Html::beginTag('div', ['class' => 'container']);
        echo Html::beginTag('div', ['class' => 'row']);
        echo Html::beginTag('div', ['class' => 'col-lg-12 col-md-12 col-sm-12 col-xs-12']);
        echo Html::tag('h1', $this->heading_h1, ['class' => 'page-title']);
        echo Html::endTag('div');
        echo Html::endTag('div');
        echo Html::endTag('div');
        echo Html::endTag('div');
    }
}
