<?php

/**
 * @copyright Copyright &copy; Arno Slatius 2015
 * @package yii2-nestable
 * @version 1.0
 */

namespace common\modules\menu\components;

/**
 * Nestable bundle for \klisl\nestable\Sortable
 *
 * @author Arno Slatius <a.slatius@gmail.com>
 * @since 1.0
 */
class MyNestableAsset extends \kartik\base\AssetBundle {

	public function init() {
		$this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/jquery.nestable']);
		$this->setupAssets('css', ['css/nestable']);
		parent::init();
	}

}