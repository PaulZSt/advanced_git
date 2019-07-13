<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m190712_090031_category
 */
class m190712_090031_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'title' => $this->string(255),
            'meta_title' => $this->string(255),
            'description' => Schema::TYPE_TEXT,
            'meta_description' => Schema::TYPE_TEXT,
            'image' => Schema::TYPE_TEXT,
            'create_at'=> $this->integer(11),
            'update_at'=> $this->integer(11),
            'order'=> $this->integer(4),
            'status'=> $this->integer(1),
            'url'=> Schema::TYPE_TEXT,
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190712_090031_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190712_090031_category cannot be reverted.\n";

        return false;
    }
    */
}
