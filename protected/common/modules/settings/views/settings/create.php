<?php

use yii\helpers\Html;

    $this->title = 'Добавление';

    $this->params['breadcrumbs'][] = ['label' => 'Настройки', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => 'Добавление'];
?>
<div class="settings-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
