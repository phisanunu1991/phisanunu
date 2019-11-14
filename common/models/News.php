<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $data_time
 * @property string $place
 * @property string $detail
 * @property int $category_id
 * @property string $photo
 * @property string $video
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['data_time'], 'safe'],
            [['detail'], 'string'],
            [['category_id', 'created_by', 'updated_by'], 'integer'],
            [['title', 'place', 'photo', 'video', 'created_at', 'updated_at'], 'string', 'max' => 255],
            [['title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'data_time' => 'Data Time',
            'place' => 'Place',
            'detail' => 'Detail',
            'category_id' => 'Category ID',
            'photo' => 'Photo',
            'video' => 'Video',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
