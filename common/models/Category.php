<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Category".
 *
 * @property int $id
 * @property string $Name
 * @property int $is_active
 */
class category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'string'],
            [['is_active'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'is_active' => 'Is Active',
        ];
    }
}
