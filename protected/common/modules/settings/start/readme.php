<?php
//beackend/config/main.php
'modules' => [
    'settings' => [
        'class' => 'common\modules\settings\Module',
    ],
],

//common/config/main.php
'components' => [
    'message' => [
        'class' => 'common\modules\settings\components\SettingsComponent',
    ],
],

//views
echo Yii::$app->settings->settings('phone');

//map
echo \common\modules\settings\widgets\MapWidget::widget(['view'=>$this])

?>