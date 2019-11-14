<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m191112_092536_create_Categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'Name' => $this->text(),
            'is_active' => $this->boolean()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
