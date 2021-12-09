<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\settings\models\Settings */

    $this->title = 'Правка : ' . $model->id;
    
    //breadcrumbs
    $this->params['breadcrumbs'][] = ['label' => 'Настройки', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $model->key;
?>
<div class="settings-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
