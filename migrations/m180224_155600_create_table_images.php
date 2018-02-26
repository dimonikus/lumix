<?php

use yii\db\Migration;

/**
 * Class m180224_155600_create_table_images
 */
class m180224_155600_create_table_images extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('images', [
            'id' => $this->primaryKey(),
            'service_id' => $this->integer()->notNull()->defaultValue(0),
            'name' => $this->string()->defaultValue(null),
            'index' => $this->integer()->notNull()->defaultValue(0)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('images');
    }
}
