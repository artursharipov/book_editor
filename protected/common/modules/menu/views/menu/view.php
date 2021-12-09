<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */

    $this->title = $model->name;
    //breadcrumbs
    $this->params['breadcrumbs'][] = ['label' => 'Меню', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $model->name;
?>
<div class="menu-view">

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'url:url',
            // 'image',
            // 'description',
            // 'property',
        ],
    ]) ?>

</div>
