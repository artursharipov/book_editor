<?php

namespace common\modules\page\models;
use common\modules\menu\models\Menu;
use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $text
 */
class Page extends \yii\db\ActiveRecord
{
    public $inMenu;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'alias'], 'required'],
            [['inMenu'], 'boolean'],
            ['alias', 'unique'],
            [['text'], 'string'],
            [['status'], 'integer'],
            [['title', 'alias'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'text' => 'Текст',
            'inMenu' => 'Добавить в меню',
        ];
    }

    public function afterSave($insert, $changedAttributes){
        parent::afterSave($insert, $changedAttributes);

        //create menu item      
        if($this->inMenu == true && $insert){
            $menu = new Menu ();
            $menu->name = $this->title;
            $menu->url = $this->id . '.html';
            if (!$root = $menu->find()->where(['depth' => '0'])->one()) {
                $rootModel = new Menu(['name' => 'root', 'url' => '/']);
                $rootModel->makeRoot();
                $menu->appendTo($rootModel);
            } else {
                $menu->appendTo($root);
            }
        }
    }

    // public function getNewAlias()
    // {
    //     $id = (int)self::find()->max('id');
    //     $id++;
    //     $alias = "page" . $id;
    //      return $alias;
    // }

    public function renderContent()
    {
        $content = str_replace('/books/'.Yii::$app->user->identity->username.'/', '', $this->text);
        $content = preg_replace("/##\d+##/", 'Презентация', $content);
        
        return $content;
    }
}
