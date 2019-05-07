<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "problems".
 *
 * @property integer $id
 * @property string $title
 * @property integer $department_id
 * @property string $description
 * @property string $date_added
 * @property integer $user_id
 * @property integer $status_id
 *
 * @property Department $department
 * @property Status $status
 * @property User $user
 */
class Problems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'problems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'department_id', 'description', 'date_added', 'user_id', 'status_id'], 'required'],
            [['department_id', 'user_id', 'status_id'], 'integer'],
            [['description'], 'string'],
            [['date_added'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'department_id' => 'Department',
            'description' => 'Description',
            'date_added' => 'Date Added',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
