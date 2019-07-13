<?php

use yii\db\Migration;

/**
 * Class m190710_081358_cities
 */
class m190710_081358_cities extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cities}}', [
        'id' => $this->primaryKey(),
        'name' => $this->string(32),
        'status' => $this->integer(1),
        'id_area' => $this->integer(11)
    ]);

        $this->addForeignKey(
            'cities_to_area',
            'cities',
            'id_area',
            'area',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {


    }



//
//            //Добавляем все необходимые поля
//        $this->createTable('images', ['id' => $this->primaryKey()->notNull(),
//        'path' => $this->char(250)->notNull(),
//        'description' => $this->char(255)->defaultValue(null),
//        'goodId' => $this->bigInteger(20)->notNull(),  //Внимание! Тип поля внешнего ключа должен совпадать с типом связываемого с ним поля]);
//
//        // Добавляем foreign key
//        $this->addForeignKey(
//        'goodId',  // это "условное имя" ключа
//        'images', // это название текущей таблицы
//        'goodId', // это имя поля в текущей таблице, которое будет ключом
//        'goods', // это имя таблицы, с которой хотим связаться
//        'id', // это поле таблицы, с которым хотим связаться
//        'CASCADE'
//        );
//        }
//
//        public
//        function down()
//        {
//            $this->dropTable('images');
//
//        //Добавляем удаление внешнего ключа
//            $this->dropForeignKey(
//                'goodId',
//                'goods'
//            );
//        }



    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190710_081358_cities cannot be reverted.\n";

        return false;
    }
    */
}
