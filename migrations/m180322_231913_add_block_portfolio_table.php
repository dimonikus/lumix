<?php

use yii\db\Migration;

/**
 * Class m180322_231913_add_block_portfolio_table
 */
class m180322_231913_add_block_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('block_portfolio', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->defaultValue(''),
            'description' => $this->text()->notNull()->defaultValue(''),
            'service_id_1' => $this->integer(),
            'service_id_2' => $this->integer(),
            'service_id_3' => $this->integer(),
            'service_id_4' => $this->integer(),
            'service_id_5' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('block_portfolio');
    }
}
