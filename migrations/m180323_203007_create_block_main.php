<?php

use yii\db\Migration;

/**
 * Class m180323_203007_create_block_main
 */
class m180323_203007_create_block_main extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('block_main', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->defaultValue(''),
            'description' => $this->text()->notNull()->defaultValue(''),
            'image' => $this->string()->defaultValue(null)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('block_main');
    }
}
