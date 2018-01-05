<?php

use yii\db\Migration;

/**
 * Class m180104_231938_createt_table_block_about
 */
class m180104_231938_createt_table_block_about extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable(
            'block_about',
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
        $this->dropTable('block_about');
    }
}
