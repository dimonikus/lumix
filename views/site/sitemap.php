<?php
/* @var $map array */
use yii\helpers\Html;
?>
<div style="padding-top: 30px">
<?= \app\widgets\pageBreadcrumbWidget::widget(['links' => ['Карта сайта']]) ?>
</div>
<div class="container">
    <h1>Карта сайта</h1>
    <div class="sitemap">
    <?php foreach ($map as $key => $value): ?>
        <ul>
            <?php if (!empty($value['url'])): ?>
            <?= Html::a($value['label'], $value['url']) ?>
            <?php else: ?>
                <?= $value['label'] ?>
            <?php endif; ?>
            <?php if (!empty($value['level'])): ?>
            <?php foreach ($value['level'] as $level): ?>
                <li>
                    <?= Html::a($level['label'], $level['url']) ?>
                </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    <?php endforeach; ?>
    </div>
</div>