<?php

/**
 * Created by PhpStorm.
 * User: shark
 * Date: 03.01.2018
 * Time: 23:02
 */
namespace app\widgets;

use yii\base\Widget;

class BestPricesWidget extends Widget
{
    public function run()
    {
        // todo load model
        return $this->render('block_prices');
    }
}