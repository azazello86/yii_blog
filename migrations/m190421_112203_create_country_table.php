<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m190421_112203_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'population' => $this->integer(),
            'code' => $this->string(3),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}
