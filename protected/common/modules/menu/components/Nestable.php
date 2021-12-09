<?php

namespace common\modules\menu\components;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Nestable extends \klisl\nestable\Nestable
{
	public $handleLabel = '<div class="dd-handle dd3-handle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>';

    public function registerAssets() {
		$view = $this->getView();
		MyNestableAsset::register($view);
		$this->registerPlugin('nestable');
	}

    protected function renderItems($_items = NULL) {


		$_items = is_null($_items) ? $this->items : $_items;
		$items = '';
        $dataid = 0;
		foreach ($_items as $item) {

			$options = ArrayHelper::getValue($item, 'options', ['class' => 'dd-item dd3-item']);
            $options = ArrayHelper::merge($this->itemOptions, $options);
            $dataId  = ArrayHelper::getValue($item, 'id', $dataid++);
            $options = ArrayHelper::merge($options, ['data-id' => $dataId]);

            $contentOptions = ArrayHelper::getValue($item, 'contentOptions', ['class' => 'dd3-content']);
			$content = $this->handleLabel;

            $id = $item['id']; //id item 

            //print_r($_items); exit;

            //create links (GridView) for viewing and manipulating the items.
        
            // $spanView = Html::tag('span', null, ['class' => "glyphicon glyphicon-eye-open"]);
            // $aView = Html::tag('a', $spanView . '&nbsp; ', ['title' => 'View', 'aria-label' => 'View', 'data-pjax' => '0', 'href'=> $this->viewItem .'?id=' . $id]);
            $spanUpdate = Html::tag('span', null, ['class' => "glyphicon glyphicon-pencil"]);
            $aUpdate = Html::tag('a', $spanUpdate . '&nbsp; ', ['title' => 'Update', 'aria-label' => 'Update', 'data-pjax' => '0', 'href'=> $this->update .'?id=' . $id]);
            $spanDelete = Html::tag('span', null, ['class' => "glyphicon glyphicon-trash"]);
            $aDelete = Html::tag('a', $spanDelete . '&nbsp; ', ['title' => 'Delete', 'aria-label' => 'Delete', 'data-pjax' => '0', 'data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post', 'href'=> $this->delete .'?id=' . $id]);

            $links = Html::tag('div', $aUpdate . $aDelete, ['class' => "actionColumn"]);
            $item['content'] .= $links;


			$content .= Html::tag('div', ArrayHelper::getValue($item, 'content', ''), $contentOptions);

			$children = ArrayHelper::getValue($item, 'children', []);
			if (!empty($children)) {
					// recursive rendering children items
				$content .= Html::beginTag('ol', ['class' => 'dd-list']);
				$content .= $this->renderItems($children);
				$content .= Html::endTag('ol');
			}

			$items .= Html::tag('li', $content, $options) . PHP_EOL;
		}
		return $items;
    }
    
	protected function prepareItems($activeQuery)
    {
        $items = [];
        foreach ($activeQuery->all() as $model) {
            $name = ArrayHelper::getValue($this->modelOptions, 'name', 'name');
            $items[] = [
                'id'       => $model->getPrimaryKey(),
                'content'  => (is_callable($name) ? call_user_func($name, $model) : $model->{$name}), //'<span class="dd3-url" style="font-size:9px">' . $model->url .'</span>'
                'children' => $this->prepareItems($model->children(1)),
            ];
        }
        return $items;
    }
}
?>