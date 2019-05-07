<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "districts".
 *
 * @property integer $id
 * @property integer $name
 *
 * @property CollectorDistrict[] $collectorDistricts
 */
class Districts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'districts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectorDistricts()
    {
        return $this->hasMany(CollectorDistrict::className(), ['district_id' => 'id']);
    }
}
