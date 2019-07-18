<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $meta_title
 * @property string $meta_description
 * @property string $name
 * @property int $category_id
 * @property string $alias
 * @property string $short_content
 * @property string $content
 * @property double $price
 * @property int $status
 */
class Product extends \yii\db\ActiveRecord
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
            [['category_id', 'status'], 'integer'],
            [['url'], 'required'],
            [['url', 'short_content', 'content'], 'string'],
            [['price'], 'number'],
            [['meta_title', 'meta_description', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'title' => Yii::t('app', 'Name'),
            'category_id' => Yii::t('app', 'Category ID'),
            'url' => Yii::t('app', 'Alias'),
            'short_content' => Yii::t('app', 'Short Content'),
            'content' => Yii::t('app', 'Content'),
            'price' => Yii::t('app', 'Price'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public static function getProductsByIds($ids) {
        return Product::find()->select(['id','title','price'])->where(['in', 'id',$ids])->all();
    }

    public static function getOrderUser($ids,$user_id) {
        return Product::find()->select(['id','title','price'])->where(['in', 'id',$ids])->andWhere(['user_id' => $user_id])->all();
    }

    public function getUser() {
        return $this->hasMany(User::className(),['id' => 'user_id']);
    }

}
