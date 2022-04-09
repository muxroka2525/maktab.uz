<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m220409_054827_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->comment('user name'),
            'email' => $this->string(255)->comment('user email'),
            'password' => $this->string(255)->comment('user password'),
            'role_id' => $this->integer(10)->comment('user role'),
            'avatar' => $this->string(255)->comment('user avatar'),
            'photo' => $this->string(255)->comment('user photo')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
