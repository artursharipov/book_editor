<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model common\modules\block\models\Block */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="block-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        echo \artursharipov\img\widgets\sortable\Sortable::widget(['items'=>$model->imgMain]);

        echo $form->field($model, 'new_img')->fileInput(['accept' => 'image/*']);

    ?>
    <?php
        echo \artursharipov\img\widgets\sortable\Sortable::widget(['items'=>$model->imgGallery]);

        echo $form->field($model, 'new_imgs[]')->fileInput(['accept' => 'image/*', 'multiple'=>true]);

    ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), ['editorOptions' => ElFinder::ckeditorOptions('elfinder',['customConfig' => '/js/ckeditor/configCKE.js']),]); ?>

    <?= $form->field($model, 'anchor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>


    <?= $form->field($model, 'status', \common\components\statusCheckbox\Status::statusTemplate('Статус'))->checkBox(['label' => false]) ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
