<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190711_120630_news
 */
class m190711_120630_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%news}}', [
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
            'views' => $this->integer(11),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190711_120630_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190711_120630_news cannot be reverted.\n";

        return false;
    }
    */
}
