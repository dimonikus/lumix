<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 03.01.2018
 * Time: 23:06
 */

namespace app\widgets;

use yii\base\Widget;

class PortfoliosBlockWidget extends Widget
{
    public function run()
    {
        // todo load model
        return $this->render('block_portfolios');
    }
}