<?php

use yii\db\Migration;

/**
 * Class m171225_004902_create_table_block_widget
 */
class m171225_004902_create_table_block_widget extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $table = 'block';
        $this->createTable(
            $table,
            [
                'id' => $this->primaryKey(),
                'index' => $this->integer(),
                'widget_name' => $this->string(),
                'name' => $this->string(),
                'checkbox' => $this->integer(1)->notNull()->defaultValue(0),
            ]
        );

        $this->insert($table, [
            'widget_name' => 'ServicesBlockWidget',
            'name' => 'Услуги',
            'index' => 1
        ]);
        $this->insert($table, [
            'widget_name' => 'AboutBlockWidget',
            'name' => 'О Нас',
            'index' => 2
        ]);
        $this->insert($table, [
            'widget_name' => 'BestPricesWidget',
            'name' => 'Прайс',
            'index' => 3
        ]);
        $this->insert($table, [
            'widget_name' => 'PortfoliosBlockWidget',
            'name' => 'Портфолио',
            'index' => 4
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('block');
    }
}
