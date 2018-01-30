<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 03.01.2018
 * Time: 22:34
 */

namespace app\widgets;

use app\models\BlockServices;
use app\modules\admin\models\Service;
use yii\base\Widget;

class ServicesBlockWidget extends Widget
{
    public function run()
    {
        $model = BlockServices::find()->one();
        $services = Service::find()->andWhere(['id' => [$model->first_service_id, $model->second_service_id]])->all();

        return $this->render('block_services', compact('model', 'services'));
    }
}