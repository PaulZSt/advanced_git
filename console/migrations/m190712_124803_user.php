<?php

use yii\db\Migration;

/**
 * Class m190712_124803_user
 */
class m190712_124803_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'fullname', 'varchar(255) AFTER username');
        $this->addColumn('user', 'lastlogin_at', 'int(11) AFTER 	updated_at');
        $this->addColumn('user', 'photo', 'varchar(255) AFTER email');
        $this->addColumn('user', 'pm_all', 'smallint(6) AFTER photo');
        $this->addColumn('user', 'pm_unread', 'smallint(6) AFTER pm_all');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190712_124803_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190712_124803_user cannot be reverted.\n";

        return false;
    }
    */
}
