<?php

namespace app\models\ila_student;

use Yii;

/**
 * This is the model class for table "solutions".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $problem_id
 * @property integer $user_id
 * @property integer $status
 *
 * @property User $user
 */
class Solutions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solutions';
    }

    public static function getDb(){
        return Yii::$app->ila_student;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'problem_id', 'user_id', 'status_id'], 'required'],
            [['description'], 'string'],
            [['problem_id', 'user_id', 'status'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
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
            'description' => 'Description',
            'problem_id' => 'Problem ID',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasOne(Students::className(), ['id' => 'user_id']);
    }

    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    
}
