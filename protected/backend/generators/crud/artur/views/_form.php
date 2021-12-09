<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

    <?= "<?php " ?>$form = ActiveForm::begin(); ?>

    <?= "<?php" ?>

        echo \artursharipov\img\widgets\sortable\Sortable::widget(['items'=>$model->imgMain]);

        echo $form->field($model, 'new_img')->fileInput(['accept' => 'image/*']);

    <?= "?>" ?>

    <?= "<?php" ?>

        echo \artursharipov\img\widgets\sortable\Sortable::widget(['items'=>$model->imgGallery]);

        echo $form->field($model, 'new_imgs[]')->fileInput(['accept' => 'image/*', 'multiple'=>true]);

    <?= "?>" ?>

<?php foreach ($generator->getColumnNames() as $attribute) {
    if($attribute == 'status') continue;
    if (in_array($attribute, $safeAttributes)) {
        echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
    }
} ?>

    <?= "<?=" ?> $form->field($model, 'status', \common\components\statusCheckbox\Status::statusTemplate('Статус'))->checkBox(['label' => false]) <?= "?>" ?>

    <div class="form-group">
        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Сохранить') ?>, ['class' => 'btn btn-success']) ?>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
