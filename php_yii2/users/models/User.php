<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $user_id
 * @property string $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property string $email personal email id of user
 * @property string|null $contact_number
 * @property string|null $password Initial password for user
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'first_name', 'email'], 'required'],
            [['user_id'], 'string', 'max' => 36],
            [['first_name', 'middle_name', 'last_name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['contact_number'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['user_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'contact_number' => 'Contact Number',
            'password' => 'Password',
        ];
    }
}