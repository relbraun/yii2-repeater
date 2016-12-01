<?php
/**
 * Created by PhpStorm.
 * User: Arielb
 * Date: 11/24/2016
 * Time: 5:51 PM
 */

namespace relbraun\yii2repeater\actions;


use yii\base\Action;

class AppendAction extends Action
{

    /**
     * @var string full name of Model class
     */
    public $model;

    public $contentPath;

    public function run()
    {
        $this->controller->viewPath = dirname(__DIR__) . '/views';
        $id = \Yii::$app->request->post('id');
        $model = new $this->model();
//        $model = $model::findOne($id);
        return $this->controller->renderPartial('repeater', ['model' => $model, 'contentPath' => $this->contentPath]);
    }
}