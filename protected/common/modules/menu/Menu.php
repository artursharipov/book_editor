<?php

namespace common\modules\menu;

/**
 * menu module definition class
 */
class Menu extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'common\modules\menu\controllers';
    public $defaultRoute = 'menu';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
