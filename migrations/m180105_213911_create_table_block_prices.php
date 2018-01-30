<?php

use yii\db\Migration;

/**
 * Class m180105_213911_create_table_block_prices
 */
class m180105_213911_create_table_block_prices extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable(
            'block_prices',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(),
                'description' => $this->text(),
                'image' => $this->string(),
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('block_prices');
    }
}
