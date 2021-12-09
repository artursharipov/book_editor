<?php

namespace common\models\forms;

use Yii;

class CalculatorContactForm extends ContactForm
{
    public $summa;
    public $srok;
    public $payment;

    public function rules()
    {
        return array_merge(parent::rules(),[

            [['summa', 'srok'], 'required'],
            [['summa'], 'integer'],
            [['srok', 'payment'], 'number'],
            
        ]);
    }

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(),[
            'summa' => 'Желаемая сумма кредита, рублей',                  
            'srok' => 'Срок кредита, лет',                  
        ]);
    }

    public function getDefaultPayment()
    {
        $summa = Yii::$app->settings->settings('summa_ot') ? Yii::$app->settings->settings('summa_ot') : 0.5;
        $srok = Yii::$app->settings->settings('srok_ot') ? Yii::$app->settings->settings('srok_ot') : 100000;

        return $this->calculateCredit($summa, $srok);
    }

    public function calculateCredit($summa, $srok)
    {
        //  $summa * $srok * Yii::$app->settings->settings('percent');
        $percent = (float)Yii::$app->settings->settings('percent');
        
        $srok = $srok * 12;

        $m_stavka = $percent / 12 / 100;

        $annuitet = $m_stavka * (1 + $m_stavka) ** $srok / ((1 + $m_stavka) ** $srok - 1);
        
        $payment = $summa * $annuitet;

        return round($payment);
    }
}
