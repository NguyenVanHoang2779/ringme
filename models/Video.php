<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "video".
 *
 * @property string $name
 * @property string $channel
 * @property string $email
 * @property string $password
 * @property string $status
 */
class Video extends \yii\db\ActiveRecord
{
    
    /**
     * {@inheritdoc}
     */
    public static function primaryKey()
    {
        return ['id'];
    }
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'channel', 'email', 'password', 'status'], 'required'],
            [['name', 'channel'], 'string', 'max' => 255],
            [['email', 'status'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'channel' => 'Channel',
            'email' => 'Email',
            'password' => 'Password',
            'status' => 'Status',
        ];
    }
   
}
