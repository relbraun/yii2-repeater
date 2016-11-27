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

    public function run()
    {
        $id = \Yii::$app->request->post('id');
        $model = new $this->model();
        $model = $model::findOne($id);

    }
}