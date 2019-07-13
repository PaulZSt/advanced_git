<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $title
 * @property string $meta_title
 * @property string $description
 * @property string $meta_description
 * @property string $short_content
 * @property string $content
 * @property int $city_id
 * @property int $user_id
 * @property int $category_id
 * @property int $price
 * @property string $image
 * @property string $images
 * @property string $options
 * @property int $views
 * @property int $create_at
 * @property int $update_at
 * @property int $status
 * @property string $url
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'meta_description', 'short_content', 'content', 'image', 'images', 'options', 'url'], 'string'],
            [['city_id', 'user_id', 'category_id', 'price', 'views', 'create_at', 'update_at', 'status'], 'integer'],
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
            'title' => Yii::t('app', 'Title'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'description' => Yii::t('app', 'Description'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'short_content' => Yii::t('app', 'Short Content'),
            'content' => Yii::t('app', 'Content'),
            'city_id' => Yii::t('app', 'City ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'price' => Yii::t('app', 'Price'),
            'image' => Yii::t('app', 'Image'),
            'images' => Yii::t('app', 'Images'),
            'options' => Yii::t('app', 'Options'),
            'views' => Yii::t('app', 'Views'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
            'status' => Yii::t('app', 'Status'),
            'url' => Yii::t('app', 'Url'),
        ];
    }
    public function getHostgroup()
    {
        return $this->hasOne(Cities::className(), ['id' => 'city_id']);
    }

    public function getUsername()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}
