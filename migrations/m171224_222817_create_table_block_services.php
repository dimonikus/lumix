<?php

use yii\db\Migration;

/**
 * Class m171224_222817_create_table_block_services
 */
class m171224_222817_create_table_block_services extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable(
            'block_services',
            [
                'id' => $this->primaryKey(),
                'description' => $this->text(),
                'first_service_id' => $this->integer()->notNull()->defaultValue(0),
                'second_service_id' => $this->integer()->notNull()->defaultValue(0),
                'name' => $this->string(),
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('block_services');
    }
}
