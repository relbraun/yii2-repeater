<?php
/**
 * Created by PhpStorm.
 * User: Arielb
 * Date: 11/24/2016
 * Time: 4:07 PM
 */

namespace relbraun\yii2repeater;


use yii\web\AssetBundle;

class RepeaterAsset extends AssetBundle
{

    public $sourcePath = __DIR__;
    public $basePath = '@backend';

    public $js = [
        'js/script.js',
    ];
    public $css = [
        'css/style.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}