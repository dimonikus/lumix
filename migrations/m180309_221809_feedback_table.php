<?php

use yii\db\Migration;

/**
 * Class m180309_221809_feedback_table
 */
class m180309_221809_feedback_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->integer(),
            'subject' => $this->string(),
            'message' => $this->text(),
            'status' => $this->integer(1)->notNull()->defaultValue(0),
            'date_create' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('feedback');
    }
}
