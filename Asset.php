<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 4/27/14
 * Time: 1:11 PM
 */

namespace harrytang\jeditable;


use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/harrytang/yii2-jeditable/src/js';
    public $js = [
        'jquery.jeditable.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

} 