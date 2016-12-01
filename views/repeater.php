<?php
/* @var $this \yii\web\View */
/* @var $form \yii\widgets\ActiveForm */
?>

<div class="repeater-item" data-id="<?= $model->primaryKey ?>">
    <?php if(isset($contentPath)){
        $content = $this->render($contentPath, ['model' => $model]);
    } ?>
    <?= $content ?>
    <a class="remove" href="javascript:;" >X</a>
</div>
