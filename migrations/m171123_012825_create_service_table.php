<?php

use yii\db\Migration;

/**
 * Handles the creation of table `service`.
 */
class m171123_012825_create_service_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('service', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull()->unique(),
            'short_description' => $this->string(),
            'price_description' => $this->string(),
            'description' => $this->text(),
            'short_img' => $this->string(),
            'price_img' => $this->string(),
            'main_img' => $this->string(),
            'index' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('service');
    }
}
