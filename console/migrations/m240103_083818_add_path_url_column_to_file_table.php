<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%file}}`.
 */
class m240103_083818_add_path_url_column_to_file_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%file}}', 'path_url', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%file}}', 'path_url');
    }
}
