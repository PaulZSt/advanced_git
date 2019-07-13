<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190711_120640_page
 */
class m190711_120640_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%page}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'meta_title' => $this->string(255),
            'short_content' => Schema::TYPE_TEXT,
            'content'=> Schema::TYPE_TEXT,
            'image'=> $this->string(255),
            'create_at'=> $this->integer(11),
            'update_at'=> $this->integer(11),
            'status'=> $this->integer(1),
            'url'=> Schema::TYPE_TEXT,
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190711_120640_static cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190711_120640_static cannot be reverted.\n";

        return false;
    }
    */
}
