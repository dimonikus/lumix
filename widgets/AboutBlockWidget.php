<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 03.01.2018
 * Time: 22:53
 */

namespace app\widgets;

use yii\base\Widget;

class AboutBlockWidget extends Widget
{
    public function run()
    {
        // todo load model
        return $this->render('block_about');
    }
}