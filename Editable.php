<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 4/26/14
 * Time: 2:20 PM
 */

namespace harrytang\jeditable;

use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

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
        Asset::register($view);
    }

    /**
     * Register JS
     */
    protected function registerJS()
    {
        $options = Json::encode($this->options);
        $script = '$("' . $this->selector . '").on().editable("' . $this->saveUrl . '", ' . $options . ');';
        if($this->pjax===true)
        {
            $script.='$(document).on("pjax:complete", function() {'.$script.'});';
        }
        $this->view->registerJs($script, View::POS_READY, __CLASS__ . $this->selector);
    }

} 
