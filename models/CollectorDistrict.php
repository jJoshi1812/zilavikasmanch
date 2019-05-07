<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "collector_district".
 *
 * @property integer $id
 * @property integer $district_id
 * @property integer $user_id
 * @property string $status
 * @property string $added_on
 *
 * @property Districts $district
 * @property User $user
 */
class CollectorDistrict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collector_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['district_id', 'user_id', 'status', 'added_on'], 'required'],
            [['district_id', 'user_id'], 'integer'],
            [['added_on'], 'safe'],
            [['status'], 'string', 'max' => 20],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => Districts::className(), 'targetAttribute' => ['district_id' => 'id']],
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
            'district_id' => 'District ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'added_on' => 'Added On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(Districts::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
