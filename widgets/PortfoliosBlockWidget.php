<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 03.01.2018
 * Time: 23:06
 */

namespace app\widgets;

use app\models\BlockPortfolio;
use yii\base\Widget;

class PortfoliosBlockWidget extends Widget
{
    public function run()
    {
        $model = BlockPortfolio::find()->one();

        return $this->render('block_portfolios', compact('model'));
    }
}