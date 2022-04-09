<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%articles}}`.
 */
class m220409_054949_create_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%articles}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->comment('article title'),
            'description' => $this->string(255)->comment('article description'),
            'content' => $this->text()->comment('article text'),
            'date' => $this->date()->comment('article date'),
            'image' => $this->string(255)->comment('article image'),
            'viewed' => $this->integer(10)->comment('article viwed count'),
            'user_id' => $this->integer()->comment('article author'),
            'status' => $this->integer()->comment('article status'),
            'category_id' => $this->integer()->comment('article category')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%articles}}');
    }
}
