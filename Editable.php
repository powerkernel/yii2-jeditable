<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\jeditable;

use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

/**
 * Class Editable
 * @package modernkernel\jeditable
 */
class Editable extends Widget
{

    public $selector = '.editable';
    public $saveUrl = '#';
    public $options = [];
    public $pjax = false;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerPlugin();
        $this->registerJS();
    }

    /**
     * Registers plugin and the related events
     */
    protected function registerPlugin()
    {
        $view = $this->getView();
        JeditableAsset::register($view);
    }

    /**
     * Register JS
     */
    protected function registerJS()
    {
        $options = Json::encode($this->options);
        $script = '$("' . $this->selector . '").on().editable("' . $this->saveUrl . '", ' . $options . ');';
        if ($this->pjax === true) {
            $script .= '$(document).on("pjax:complete", function() {' . $script . '});';
        }
        $this->view->registerJs($script, View::POS_READY, __CLASS__ . $this->selector);
    }

} 
