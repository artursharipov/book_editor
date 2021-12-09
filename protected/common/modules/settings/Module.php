<?php

namespace common\modules\settings;

class Module extends \yii\base\Module
{

    public $controllerNamespace = 'common\modules\settings\controllers';
    public $defaultRoute = 'settings';

    public function init()
    {
        parent::init();
    }
}
