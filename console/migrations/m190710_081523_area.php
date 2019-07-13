<?php

use yii\db\Migration;

/**
 * Class m190710_081523_area
 */
class m190710_081523_area extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%area}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(32),
            'status' => $this->integer(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190710_081523_area cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190710_081523_area cannot be reverted.\n";

        return false;
    }
    */
}
