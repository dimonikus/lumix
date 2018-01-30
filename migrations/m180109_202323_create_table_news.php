<?php

use yii\db\Migration;

/**
 * Class m180109_202323_create_table_news
 */
class m180109_202323_create_table_news extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('news',
            [
                'id' => $this->primaryKey(),
                'image' => $this->string()->defaultValue(''),
                'name' => $this->string()->defaultValue(''),
                'url' => $this->string()->defaultValue(''),
                'category' => $this->integer()->defaultValue(null),
                'short_description' => $this->text(),
                'description' => $this->text(),
                'status' => $this->integer(2)->notNull()->defaultValue(0),
                'date' => $this->timestamp(),
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
