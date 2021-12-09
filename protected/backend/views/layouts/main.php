<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Открыть сайт', 'url' => '/'],
        
        ['label' => 'Настройки', 'url' => ['/settings']],
        [
            'label' => 'Контент',
            'items' => [
                ['label' => 'Страницы', 'url' => ['/page']],
                ['label' => 'Блоки', 'url' => ['/block']],
                ['label' => 'Меню', 'url' => ['/menu']],
            ],
            'visible' => Yii::$app->user->identity->role->name == 'ADMIN'
        ],
        [
            'label' => 'Безопасность',
            'items' => [
                ['label' => 'Пользователи', 'url' => '/admin/user/user'],
                ['label' => 'Назначение прав', 'url' => '/admin/user/assignment'],
                ['label' => 'Роли', 'url' => '/admin/user/role'],
                ['label' => 'Правила', 'url' => '/admin/user/rule'],
                ['label' => 'Разрешения', 'url' => '/admin/user/permission'],
                ['label' => 'Маршруты', 'url' => '/admin/user/route'],
            ],
            'visible' => Yii::$app->user->identity->role->name == 'ADMIN'
        ],
        
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Вход', 'url' => ['/user/user/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/user/user/logout'], 'post')
            . Html::submitButton(
                'Выход (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
