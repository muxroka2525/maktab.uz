<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $name user name
 * @property string|null $email user email
 * @property string|null $password user password
 * @property int|null $role_id user role
 * @property string|null $avatar user avatar
 * @property string|null $photo user photo
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role_id'], 'integer'],
            [['name', 'email', 'password', 'avatar', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'role_id' => 'Role ID',
            'avatar' => 'Avatar',
            'photo' => 'Photo',
        ];
    }
}
