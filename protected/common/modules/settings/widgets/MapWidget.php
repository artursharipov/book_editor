<?php

namespace common\modules\settings\widgets;
use yii\base\Widget;
use yii\helpers\Json;
use Yii;

class MapWidget extends Widget{
    
    public $maps;
    public $view;
        
	public function run(){
        
        if(Yii::$app->settings->settings('coordsMap')){
            //php in js
            Yii::$app->view->registerJs("
            var coordsMap = [" . Yii::$app->settings->settings('coordsMap') . "]; 
            var baloonMap = " . Json::encode(Yii::$app->settings->settings('baloonMap')) . ";",  
            \yii\web\View::POS_HEAD);

            MapAsset::register($this->view);

            return $this->render('map',[
            'maps' => $this->maps,
            ]);
        }
	}
}
?>