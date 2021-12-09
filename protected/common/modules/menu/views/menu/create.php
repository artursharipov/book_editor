<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Menu */

    $this->title = 'Добавление';
    //breadcrumbs
    $this->params['breadcrumbs'][] = ['label' => 'Меню', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => 'Добавление'];
?>
<div class="menu-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
