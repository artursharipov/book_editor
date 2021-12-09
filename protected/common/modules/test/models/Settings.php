<?php

namespace common\modules\test\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property int $status
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    public function behaviors()
    {
        return [
            'img' => [
                'class' => \artursharipov\img\behaviors\ImgBehavior::className(),
                'hashClass' => "Settings",
                'folder_image' => 'img/settings/',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key'], 'required'],
            [['status'], 'integer'],
            [['key', 'value'], 'string', 'max' => 255],
            [['key'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'value' => 'Value',
            'status' => 'Status',
        ];
    }
}
