# yii2-repeater

An Yii2 widget enable you to implement [Yii2 tabular](http://www.yiiframework.com/doc-2.0/guide-input-tabular-input.html) 
with simple way.

##How to use

install using composer:
`composer require relbraun/yii2repeater`

put this code in your form:
```
<?php echo Repeater::widget([
        'modelView' => '@backend/views/path/to/your/repeater_view_file',
        'appendAction' => \yii\helpers\Url::to(['add-item-action']),
        'removeAction' => \yii\helpers\Url::to(['remove-item-action']),
        'form' => $form,
        'models' => $models, //The existing sub models
    ]) ?>
```
in your desired controller ypu have to put tis code:
```
public function actions()
    {
        return [
            'add-item' => [
                'class' => 'relbraun\yii2repeater\actions\AppendAction',
                'model' => 'backend\models\DesiredModel',
                'contentPath' => '/path/to/repeater/view', //related to current controller
            ],
            'remove-item' => [
                'class' => 'relbraun\yii2repeater\actions\DeleteAction',
                'model' => 'backend\models\DesiredModel',
            ]
        ];
    }
```
And this is an example of the repeater_view_file.php reminded above:
```
<div class="repeater-content">
    <div class="form-group">
        <?= Html::label('Some label', Html::getInputId($model, "[$k]attribute")) ?>
        <?= Html::activeTextInput($model, "[$k]attribute", ['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= Html::label('Other label', Html::getInputId($model, "[$k]other_attribute")) ?>
        <?= Html::activeTextInput($model, "[$k]other_attribute", ['class' => 'form-control']) ?>
    </div>
</div>
```