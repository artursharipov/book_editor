<?php
namespace common\modules\settings\components;
use common\modules\settings\models\Settings;

use yii\base\Component;
use yii\helpers\Html;

class SettingsComponent extends Component
{
	public $settings = array();
	public $all;
	
    public function init()
    {
        parent::init();
        if($this->all= Settings::find()->where(['status'=>1])->all()){
            //generate settings array
            foreach($this->all as $one){
                $this->settings[$one->key] = $one->value;
            }
        }       
    }

    public function settings($key = null)
    {
        if($key != null && $this->settings[$key]){
            return Html::encode($this->settings[$key]);
        }
    }
	
}
?>