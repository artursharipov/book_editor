<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-6">

            <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

        </div>
    </div>

    <?= $form->field($model, 'status', \common\components\statusCheckbox\Status::statusTemplate('Статус'))->checkBox(['label' => false]) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
