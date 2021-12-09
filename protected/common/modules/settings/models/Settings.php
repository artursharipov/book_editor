<?php

namespace common\modules\settings\models;

use Yii;

class Settings extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'settings';
    }

    public function rules()
    {
        return [
            [['key'], 'required'],
            [['status'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['key'], 'unique'],
            ['key', 'string', 'min'=>3, 'max' => 255],
            ['key', 'match', 'pattern' => '/^[a-z]\w*$/i', 'message'=>'Поле должно начинаться с букв, а также состоять из латинских букв, цифр или знака подчеркивания'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Ключ',
            'value' => 'Значение',
            'status' => 'Статус',
        ];
    }
}
