<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $title
 * @property string $meta_title
 * @property string $description
 * @property string $meta_description
 * @property string $image
 * @property int $create_at
 * @property int $update_at
 * @property int $order
 * @property int $status
 * @property string $url
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'create_at', 'update_at', 'order', 'status'], 'integer'],
            [['description', 'meta_description', 'image', 'url'], 'string'],
            [['title', 'meta_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'title' => Yii::t('app', 'Title'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'description' => Yii::t('app', 'Description'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'image' => Yii::t('app', 'Image'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
            'order' => Yii::t('app', 'Order'),
            'status' => Yii::t('app', 'Status'),
            'url' => Yii::t('app', 'Url'),
        ];
    }
}
