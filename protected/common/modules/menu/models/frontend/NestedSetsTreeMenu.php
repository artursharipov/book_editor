<?php

namespace common\modules\menu\models\frontend;

use common\modules\menu\models\backend\NestedSetsTree;
use Yii;


class NestedSetsTreeMenu extends NestedSetsTree
{

    /**
     * @var string
     */
    public $childrenOutAttribute = 'items'; //children

    /**
     * @var string
     */
    public $labelOutAttribute = 'label'; //title


    /**
     * Добавляет в массив дополнительные элементы
     * @param $node
     * @return array
     */
    protected function addItem($node, $test)
    {
        $node = $this->renameTitle($node, $test); //переименование элемента массива
        //$node = $this->visible($node); //видимость элементов меню
        $node = $this->makeActive($node); //выделение активного пункта меню
        $node = $this->addIcon($node);//Добавляем иконки через template

        return $node;
    }


    /**
     * Переименовываем элемент "name" в "label" (создаем label, удаляем name)
     * требуется для yii\widgets\Menu
     * @param $node
     * @return array
     */
    protected function renameTitle($node, $test)
    {
        $newNode = (!empty($node[$this->labelAttribute2]) && $test == true) ? [$this->labelOutAttribute => $node[$this->labelAttribute2]] : [$this->labelOutAttribute => $node[$this->labelAttribute]];

        unset($node[$this->labelAttribute]);

        return array_merge($node, $newNode);
    }


    /**
     * Видимость пункта меню (visible = false - скрыть элемент)
     * @param $node
     * @return array
     */
    protected function visible($node)
    {
        $newNode = [];

        //Гость
        if (Yii::$app->user->isGuest) {

            //Действие logout по-умолчанию проверяется на метод POST.
            //При использовании подкорректировать VerbFilter в контроллере (удалить это действие или добавить GET).
            if ($node['url'] === '/logout') {
                $newNode = [
                    'visible' => false,
                ];
            }

        //Авторизованный пользователь
        } else {
            if ($node['url'] === '/login' || $node['url'] === '/signup') {
                $newNode = [
                    'visible' => false,
                ];
            }
        }
        if($node['status'] == 0){
            $newNode = [
                'visible' => false,
            ];
        }

        return array_merge($node, $newNode);
    }



    /**
     * Добавляет элемент "active" в массив с url соответствующим текущему запросу
     * для назначения отдельного класса активному пункту меню
     *
     * @param $node
     * @return array
     */
    private function makeActive($node)
    {
        //URL без хоста, слэша спереди и параметров запроса
        $path = Yii::$app->request->getPathInfo();

        //считается, что поле url в БД содержит слэш спереди, например "/about"
        if('/' . $path === $node['url']){
            $newNode = [
                'active' => true,
            ];
            return array_merge($node, $newNode);
        }

        return $node;
    }

    //Добавляем шаблон 3 уровню меню
    protected function addIcon($node)
    {
        $newNode = [];

        if(!empty($node['property'])){
            $newNode = [
                'template' => '<a href="{url}"><i class="'.$node['property'].'"></i> {label}</a>',
            ];
        }

        return array_merge($node, $newNode);
    }

}
?>