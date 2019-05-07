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
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    public static function getDb(){
        return Yii::$app->ila_student;
    }

    /**
     * @inheritdoc
     */
    
    
}
