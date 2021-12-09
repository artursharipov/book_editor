<?php

namespace common\modules\menu\models;
use creocoder\nestedsets\NestedSetsBehavior;
use common\modules\menu\models\backend\MenuQuery;
use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int $lft
 * @property int $rgt
 * @property int $depth
 * @property string $name
 * @property string $url
 */
class Menu extends \yii\db\ActiveRecord
{
    public $page;
    public $block;
	/**
     * {@inheritdoc}
     */
    
    public static function tableName()
    {
        return 'menu';
    }

    public function behaviors() {
        return [
            'tree' => [
                'class' => NestedSetsBehavior::className(),
                // 'treeAttribute' => 'tree',
                // 'leftAttribute' => 'lft',
                // 'rightAttribute' => 'rgt',
                // 'depthAttribute' => 'depth',
            ],
        ];
    }

    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    public static function find()
    {
        return new MenuQuery(get_called_class());
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['lft', 'rgt', 'depth'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lft' => 'Lft',
            'rgt' => 'Rgt',
            'depth' => 'Depth',
            'name' => 'Наименование',
            'url' => 'Url',
            'page' => 'Ссылка на страницу',
            'block' => 'Ссылка на блок',
        ];
    }
}
