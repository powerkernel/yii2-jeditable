<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\jeditable;


use yii\web\AssetBundle;

/**
 * Class Asset
 * @package modernkernel\jeditable
 */
class JeditableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/modernkernel/yii2-jeditable/assets/js';
    public $js = [
        'jquery.jeditable.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

} 