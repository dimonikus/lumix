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
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, mp4'],
        ];
    }

    private function generateImageName($extension)
    {
        return time() . '_' . \Yii::$app->security->generateRandomString(5). '.' . $extension;
    }

    public function upload($model, $attribute)
    {
        $this->imageFile = UploadedFile::getInstance($model, $attribute);
        if ($this->validate()) {
            $this->remove($model->oldAttributes[$attribute]);
            $imageName = $this->generateImageName($this->imageFile->extension);
            $this->imageFile->saveAs(\Yii::$app->params['imagePath'] . $imageName);
            return $imageName;
        } else {
            return $model->oldAttributes[$attribute];
        }
    }

    public function remove($imageName)
    {
        if (!empty($imageName) && file_exists(\Yii::$app->params['imagePath'].$imageName)) {
            @unlink(\Yii::$app->params['imagePath'].$imageName);
        }
    }
}