<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?= Yii::$app->settings->settings('meta_keywords');?>">
	<meta name="description" content="<?= Yii::$app->settings->settings('meta_description');?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('bootstrap4/_navbar') ?>

<?=$content?>

<!--MODAL--->
<div id="modal-sm" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="label-evacuation">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <div class="modal-body">
                
            </div>

        </div>
    </div>
</div>

<!--MODAL2--->
<div id="modal-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="label-evacuation">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <div class="modal-body">
                
            </div>

        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
