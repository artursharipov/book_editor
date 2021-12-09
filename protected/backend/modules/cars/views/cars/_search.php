<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\cars\models\CarsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'marka') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'power') ?>

    <?= $form->field($model, 'drive') ?>

    <?php // echo $form->field($model, 'body_type') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'wheel') ?>

    <?php // echo $form->field($model, 'probeg') ?>

    <?php // echo $form->field($model, 'generation') ?>

    <?php // echo $form->field($model, 'transmission') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'engine') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
