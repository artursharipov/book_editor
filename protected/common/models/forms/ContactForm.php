<?php

namespace common\models\forms;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $phone;
    public $agree;

    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],

            [['name', 'phone'], 'string'],
            [['agree'], 'required', 'requiredValue' => 1, 'message'=>'Необходимо принять условия соглашения'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'agree' => 'Даю согласие на обработку персональных данных',
        ];
    }

    public function sendEmail($email, $subject, $body, $images = null)
    {
        $arr_email = explode(",", $email);

        foreach($arr_email as $one_email){

            $one_email = trim($one_email);

            $mail = Yii::$app->mailer->compose()
            ->setTo($one_email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setSubject($subject)
            ->setHtmlBody($body);
        
            if(!is_null($images)){
                foreach($images as $image){
                    // $mail->attach($image->tempName);
                    $mail->attach($image->tempName, ['fileName' => $image->baseName  .  '.'  .  $image->extension]);
                }
            }

            $mail->send();

        }   
        return true;    
    }
}
