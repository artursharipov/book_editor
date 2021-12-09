<?php
//backend\config\main.php
    'modules' => [
        'menu' => [
            'class' => 'common\modules\menu\Menu',
        ],
    ],
?>

<?php
//views
    echo Nav::widget([
        'options' => ['class' => 'uk-navbar-nav'],
        'items' => common\modules\menu\models\frontend\MenuArray::getData(),
    ]);
?>