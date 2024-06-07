<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Equipment extends ActiveRecord
{
    public static function tableName()
    {
        return 'equipment';
    }
}