<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Настройки';
$this->params['breadcrumbs'][] = ['label' => 'Настройки'];

?>
<div class="settings-index">

    <?php Pjax::begin(); ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<div class="btn-grid">{update}{delete}</div>'
            ],
            'key',
            'value',
            \common\components\statusCheckbox\Status::column('switch', 'status'),
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>