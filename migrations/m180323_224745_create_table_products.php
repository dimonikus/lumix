<?php

use yii\db\Migration;

/**
 * Class m180323_224745_create_table_products
 */
class m180323_224745_create_table_products extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title' => $this->string(),
            'name' => $this->string(),
            'price' => $this->float()->notNull()->defaultValue(0),
            'from_price' => $this->integer(2)->notNull()->defaultValue(0),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }
}
