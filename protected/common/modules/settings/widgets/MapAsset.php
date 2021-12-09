<?php

namespace common\modules\settings\widgets;

use yii\web\AssetBundle;

class MapAsset extends AssetBundle
{
    public $sourcePath = '@common/modules/settings/assets';

    public $js = [
        'https://api-maps.yandex.ru/2.1/?lang=ru_RU',
        'map.js',
    ];

    public $depends = [
        'frontend\assets\AppAsset',
    ];
}
?>