<?php

namespace common\modules\block\models;

use Yii;

/**
 * This is the model class for table "block".
 *
 * @property int $id
 * @property string $title
 * @property string|null $subtitle
 * @property string|null $description
 * @property string|null $text
 * @property string $anchor
 * @property int $sort
 * @property int $status
 */
class Block extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'block';
    }

    public function behaviors()
    {
        return [
            'img' => [
                'class' => \artursharipov\img\behaviors\ImgBehavior::className(),
                'hashClass' => "Block",
                'folder_image' => 'img/block/',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'anchor', 'sort', 'status'], 'required'],
            [['description', 'text'], 'string'],
            [['sort', 'status'], 'integer'],
            [['title', 'subtitle', 'anchor'], 'string', 'max' => 255],
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
            'subtitle' => 'Подзаголовок',
            'description' => 'Описание',
            'text' => 'Текст',
            'anchor' => 'Якорь',
            'sort' => 'Sort',
            'status' => 'Статус',
        ];
    }
}
