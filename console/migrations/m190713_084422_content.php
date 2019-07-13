<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m190713_084422_content
 */
class m190713_084422_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%content}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'meta_title' => $this->string(255),
            'description' => Schema::TYPE_TEXT,
            'meta_description' => Schema::TYPE_TEXT,
            'short_content' => Schema::TYPE_TEXT,
            'content' => Schema::TYPE_TEXT,
            'city_id'=> $this->integer(4),
            'user_id'=> $this->integer(6),
            'category_id'=> $this->integer(11),
            'price'=> $this->integer(11),
            'image' => Schema::TYPE_TEXT,
            'images' => Schema::TYPE_TEXT,
            'options' => Schema::TYPE_TEXT,
            'views'=> $this->integer(11),
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
        echo "m190713_084422_content cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190713_084422_content cannot be reverted.\n";

        return false;
    }
    */
}
