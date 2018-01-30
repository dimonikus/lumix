<?php
/* @var $service \app\modules\admin\models\Service */
use yii\widgets\ActiveForm;
use \yii\helpers\Html;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;

$form = ActiveForm::begin(['action' => '/admin/service/edit?id=' . $service->id . '&tab=main']);

//echo $form->field($service, 'description')->widget(CKEditor::className(), [
//    'options' => ['rows' => 6],
//    'preset' => 'full',
//]);

echo $form->field($service, 'description')->widget(TinyMce::className(), [
    'options' => ['rows' => 16],
    'language' => 'ru',
    'clientOptions' => [
        'plugins' => [
            'advlist autolink lists link charmap hr preview pagebreak',
            'searchreplace wordcount textcolor visualblocks visualchars code fullscreen nonbreaking',
            'save insertdatetime media table contextmenu template paste image responsivefilemanager filemanager',
        ],
        'toolbar' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager link image media',
        'external_filemanager_path' => '/filemanager/filemanager/',
        'filemanager_title' => 'Responsive Filemanager',
        'external_plugins' => [
            //Иконка/кнопка загрузки файла в диалоге вставки изображения.
            'filemanager' => '/filemanager/filemanager/plugin.min.js',
            //Иконка/кнопка загрузки файла в панеле иснструментов.
            'responsivefilemanager' => '/filemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
        ],
        'relative_urls' => false,
    ]
]);

echo $form->field($service, 'main_img')->fileInput();
echo '<p>' . Html::img($service->getImage('main_img'), ['class'=>"img-rounded"]) . '</p>';
echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>