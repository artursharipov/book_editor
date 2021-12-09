<?php

namespace common\modules\menu\models\frontend;

use common\modules\menu\models\Menu;

class MenuArray
{

    static function getData()
    {

        $collection = Menu::find()->orderBy('lft')->asArray()->all();

        $menu = [];

        if($collection){
            $nsTree = new NestedSetsTreeMenu();
            $dataMenu = $nsTree->tree($collection); //создаем дерево в виде массива
            $menu = $dataMenu[0]['items']; //убираем корневой элемент
        }

        return $menu;
    }

}