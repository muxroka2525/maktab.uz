<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article_tags}}`.
 */
class m220409_055152_create_article_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article_tags}}', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer()->comment('article tag'),
            'tag_id' => $this->integer()->comment('tag id')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article_tags}}');
    }
}
