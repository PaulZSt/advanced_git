<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m190714_093334_messages
 */
class m190714_093334_messages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%messages}}', [
            'id' => $this->primaryKey(),
            'subj' => $this->string(255),
            'message' => Schema::TYPE_TEXT,
            'user' => $this->integer(11),
            'user_from' => $this->integer(11),
            'date' => $this->integer(11),
            'folder' => $this->integer(1),
            'pm_read'=> $this->integer(1),
            'reply'=> $this->integer(1),
            'send_id'=> $this->integer(11),
         ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190714_093334_messages cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190714_093334_messages cannot be reverted.\n";

        return false;
    }
    */
}
