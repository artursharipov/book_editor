<?php

use yii\db\Migration;

/**
 * Class m190812_074727_create_table_page
 */
class m190812_074727_create_table_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%page}}', [
            'id' => $this->primaryKey(),
            //'tree' => $this->integer()->notNull(),
            'title' => $this->string()->Null(),
            'alias' => $this->string()->notNull()->unique(),
            'description' => $this->string()->Null(),
            'text' => $this->text()->Null(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);

        Yii::$app->db->createCommand()->batchInsert('{{%page}}', 
            ['title', 'alias', 'status'], [
            ['Главная', 'main', 1],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%page}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190812_074727_create_table_page cannot be reverted.\n";

        return false;
    }
    */
}
