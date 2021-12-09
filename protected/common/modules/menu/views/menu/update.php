<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */

    $this->title = 'Правка : ' . $model->name;
    //breadcrumbs
    $this->params['breadcrumbs'][] = ['label' => 'Меню', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $model->name;
?>
<div class="menu-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
