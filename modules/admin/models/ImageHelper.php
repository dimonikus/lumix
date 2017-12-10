<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 10.12.2017
 * Time: 1:41
 */

namespace app\modules\admin\models;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageHelper extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload($model, $attribute)
    {
        $this->imageFile = UploadedFile::getInstance($model, $attribute);
        if ($this->validate()) {
            $this->imageFile->saveAs(\Yii::$app->params['imagePath'] . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return $this->imageFile->baseName . '.' . $this->imageFile->extension;
        } else {
            return $model->oldAttributes[$attribute];
        }
    }
}