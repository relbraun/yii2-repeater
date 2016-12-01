<?php
/**
 * Created by PhpStorm.
 * User: Arielb
 * Date: 11/24/2016
 * Time: 5:51 PM
 */

namespace relbraun\yii2repeater\actions;


use Yii;
use yii\base\Action;
use yii\db\ActiveRecord;
use yii\web\Response;

class DeleteAction extends Action
{
    /**
     * @var string full name of Model class
     */
    public $model;


    public function run()
    {
        $id = \Yii::$app->request->post('id');
       $model = $this->model;
        /** @var ActiveRecord $model */
        $model = $model::findOne($id);
        $response = 0;
        if($model){
            $response = $model->delete();
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['status' => $response];
    }
}