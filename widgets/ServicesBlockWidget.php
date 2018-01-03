<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 03.01.2018
 * Time: 22:34
 */

namespace app\widgets;

use yii\base\Widget;

class ServicesBlockWidget extends Widget
{
    public function run()
    {
        // todo load model
        return $this->render('block_services');
    }
}