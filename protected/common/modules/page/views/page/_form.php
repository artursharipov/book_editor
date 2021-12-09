<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
// use \app\components\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\modules\page\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

 

<?php $form = ActiveForm::begin(); ?>

<p>
    <?= Html::a('<i class="glyphicon glyphicon-chevron-left" aria-hidden="true"></i> назад', ['index'], ['class' => 'btn btn-default']) ?>             
    <?= Html::submitButton('<i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i> Сохранить', ['class' => 'btn btn-success']) ?>
    <?= $model->id ? Html::a('<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Вы действительно хотите удалить элемент?',
            'method' => 'post',
        ],
    ]) : '' ?>
</p>

<div class="row">
    <div class="col-md-9">

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'text')->widget(CKEditor::className(), ['editorOptions' => ElFinder::ckeditorOptions('elfinder',['customConfig' => '/js/ckeditor/configCKE.js']),]); ?>

            <div class="form-group">
                <?= Html::submitButton('<i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить', ['class' => 'btn btn-success']) ?>
            </div>       
        
    </div>
    <div class="col-md-3">

        <?= $form->field($model, 'status', \common\components\statusCheckbox\Status::statusTemplate('Статус'))->checkBox(['label' => false]) ?>       

        <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        <?= !$model->id ? $form->field($model, 'inMenu', ['options'=>['class'=>'']])->checkBox() : '' ?>

    </div>
</div>

<?php ActiveForm::end(); ?>  

