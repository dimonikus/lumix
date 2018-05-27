<?php

use yii\db\Migration;

/**
 * Handles the creation of table `meta_info`.
 */
class m180527_175920_create_meta_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('meta_info', [
            'id' => $this->primaryKey(),
            'model_name' => $this->string(),
            'model_id' => $this->integer(),
            'title' => $this->string(),
            'keywords' => $this->string(),
            'description' => $this->string(),
            'robots' => $this->smallInteger(4),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('meta_info');
    }
}
