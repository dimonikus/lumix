<?php

use yii\db\Migration;

/**
 * Class m171224_142925_create_table_contact_page
 */
class m171224_142925_create_table_contact_page extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable(
            'contact_page',
            [
                'id' => $this->primaryKey(),
                'address' => $this->string()->defaultValue(null),
                'phone' => $this->string()->defaultValue(null),
                'mail' => $this->string()->defaultValue(null),
                'opening_hours' => $this->string()->defaultValue(null),
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('contact_page');
    }
}
