<?php

namespace common\models\forms;

use Yii;

class CarContactForm extends ContactForm
{
    public $car;

    public function rules()
    {
        return array_merge(parent::rules(),[

            [['car'], 'required'],
            [['car'], 'string'],

        ]);
    }

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(),[
            'car' => 'Автомобиль',                
        ]);
    }

    
}
