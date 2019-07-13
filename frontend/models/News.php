<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $meta_title
 * @property string $short_content
 * @property string $content
 * @property string $image
 * @property int $create_at
 * @property int $update_at
 * @property int $status
 * @property string $url
 * @property int $views
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
            [['short_content', 'content', 'url'], 'string'],
            [['create_at', 'update_at', 'status', 'views'], 'integer'],
            [['title', 'meta_title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'short_content' => Yii::t('app', 'Short Content'),
            'content' => Yii::t('app', 'Content'),
            'image' => Yii::t('app', 'Image'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
            'status' => Yii::t('app', 'Status'),
            'url' => Yii::t('app', 'Url'),
            'views' => Yii::t('app', 'Views'),
        ];
    }
}
