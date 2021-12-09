<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\block\models\BlockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Блоки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="block-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<div class="btn-grid">{update}{delete}</div>'
            ],
            [
                'label' => '',
                'format' => 'raw',
                'value' =>function($data){
                    return '<img height="40" src="'.$data->imgMain->src.'">';
                },
            ],

            'id',
            'title',
            // 'subtitle',
            // 'description:ntext',
            // 'text:ntext',
            'anchor',
            //'sort',
            //'status',

            \common\components\statusCheckbox\Status::column('switch', 'status'),
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
