<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 4/27/14
 * Time: 1:11 PM
 */

namespace modernkernel\jeditable;


use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/modernkernel/yii2-jeditable/src/js';
    public $js = [
        'jquery.jeditable.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

} 
