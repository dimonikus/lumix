<?php
use kartik\file\FileInput;
use yii\helpers\Url;
?>
<h1>Портфолио</h1>
<p class="alert alert-danger" role="alert">
    <strong>Внимание!</strong><br>
    Раздел находится в стадии разработки
</p>

<?php
$initialPreview = [];
$initialPreviewConfig = [];
foreach ($model as $image) {
    $initialPreview[] = ['/uploads/images/' . $image->name];
    $initialPreviewConfig[] = ['key' => $image->id];
}

echo FileInput::widget([
    'name' => 'Images[name]',
    'language' => 'ru',
    'options' => ['multiple' => true],
    'pluginOptions' => [
        'previewFileType' => 'any',
        'uploadUrl' => Url::to(['/admin/portfolio/file-upload', 'id' => $id]),
        'deleteUrl' => Url::to(['/admin/portfolio/file-delete']),
        'showCaption' => true,
        'showRemove' => false,
        'showUpload' => true,
        'initialPreviewAsData' => true,
        'initialPreview' => $initialPreview,
        'initialPreviewConfig' => $initialPreviewConfig,
        ]
]);
?>
