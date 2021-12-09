<?php

use yii\db\Migration;

/**
 * Class m190724_114635_create_table_settings
 */
class m190724_114635_create_table_settings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey(),
            //'tree' => $this->integer()->notNull(),
            'key' => $this->string()->notNull()->unique(),
            'value' => $this->string()->Null(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);

        Yii::$app->db->createCommand()->batchInsert('{{%settings}}', 
            ['key', 'value', 'status'], [
            ['email', 'test@mail.ru', 1],
            ['phone', '89003211122', 1],
            ['coordsMap', '55.15992757, 61.39963400', 1],
            ['baloonMap', 'Название организации', 1],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%settings}}');
    }

}
