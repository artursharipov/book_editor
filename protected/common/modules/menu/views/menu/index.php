<?php

use yii\helpers\Html;
use common\modules\menu\components\Nestable;
use yii\helpers\Url;

/* @var $query \yii\db\ActiveQuery */

$this->title = 'Меню';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p><?= Html::a('Добавить пункт', ['create'], ['class' => 'btn btn-success']) ?></p>

    <?= Nestable::widget([
        'type' => Nestable::TYPE_WITH_HANDLE,
        'query' => $query,
        'modelOptions' => [
            'name' => 'name', //поле из БД с названием элемента (отображается в дереве)
        ],
        'pluginEvents' => [
            'change' => 'function(e) {}', //js событие при выборе элемента
        ],
        'pluginOptions' => [
            'maxDepth' => 3, //максимальное кол-во уровней вложенности
        ],
        'update' => Url::to(['menu/update']), //действие по обновлению
        'delete' => Url::to(['menu/delete']), //действие по удалению
        'viewItem' => Url::to(['menu/view']), //действие по удалению
    ]);
    ?>

    <div id="nestable-menu">
        <button class="btn btn-default" type="button" data-action="expand-all">Раскрыть все</button>
        <button class="btn btn-default" type="button" data-action="collapse-all">Скрыть все</button>
    </div>

</div>