<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'lib/slick/slick.css',
        // 'lib/slick/slick-theme.css',
        'css/style.css',
        'css/media.css',
    ];
    public $js = [
        // 'lib/slick/slick.min.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
