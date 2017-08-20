<?php
/* @var $this \yii\web\View */
/* @var $form \yii\widgets\ActiveForm */
?>

<div class="repeater-item" data-id="<?= $k ?>">
    <?php if(isset($contentPath)){
        $content = $this->render($contentPath, ['model' => $model, 'k' => $k]);
    } ?>
    <?= $content ?>
    <a class="remove" href="javascript:;" >X</a>
</div>
