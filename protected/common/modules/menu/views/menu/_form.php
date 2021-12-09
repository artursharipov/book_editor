<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\ArrayHelper;
use common\modules\page\models\Page;
use common\modules\block\models\Block;
/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-angle-left" aria-hidden="true"></i> назад', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('<i class="glyphicon glyphicon-floppy-disk"></i>', ['class' => 'btn btn-success']) ?>
        <?= $model->id ? Html::a('<i class="fa fa-trash-o" aria-hidden="true"></i>', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить элемент?',
                'method' => 'post',
            ],
        ]) : '' ?>
    </div>
	
    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-6">
        
            <?= $form->field($model, 'page')->dropDownList(
                ArrayHelper::map(Page::find()->all(),'id','title'),
                [
                    'prompt'=>'Выбрать страницу', 
                    'onchange'=>'
                        
                        $.post("/admin/menu/menu/create-url?id='.'"+$(this).val(), function(data){
                            document.getElementById("menu-url").value = data;
                            if(data){
                                document.getElementById("menu-name").value = $("#menu-page option:selected").text();
                            }else{
                                document.getElementById("menu-name").value = "";
                            }
                        });
                    '
                ]) 
            ?>

            <?= $form->field($model, 'block')->dropDownList(
                ArrayHelper::map(Block::find()->all(),'id','title'),
                [
                    'prompt'=>'Выбрать блок', 
                    'onchange'=>'
                        
                        $.post("/admin/menu/menu/create-anchor?id='.'"+$(this).val(), function(data){
                            document.getElementById("menu-url").value = data;
                            if(data){
                                document.getElementById("menu-name").value = $("#menu-block option:selected").text();
                            }else{
                                document.getElementById("menu-name").value = "";
                            }
                        });
                    '
                ]) 
            ?>

        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
