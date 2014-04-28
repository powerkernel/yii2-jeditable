<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 4/26/14
 * Time: 2:20 PM
 */

namespace harrytang\jeditable;

use yii\base\Widget;

class Editable extends Widget
{

    public $selector = '';
    public $options = [];

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
        //$options = CJavaScript::encode($this->options);
        //$options = Json::encode($this->options);
        //$script = '$("' . $this->selector . '").dotdotdot(' . $options . ');';
        //$this->view->registerJs($script, View::POS_READY, __CLASS__ . $this->selector);
    }

} 