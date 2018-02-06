<?php

use yii\db\Migration;

/**
 * Handles the creation of table `price`.
 */
class m171125_231156_create_price_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('price', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
            'price' => $this->float()->notNull(),
            'service_id' => $this->integer()->notNull(),
            'index' => $this->integer()->notNull()->defaultValue(100),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('price');
    }
}
