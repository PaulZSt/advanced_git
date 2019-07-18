<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_atribute".
 *
 * @property int $id
 * @property int $atribute_id
 * @property int $atribute_name
 * @property int $product_id
 * @property string $value
 */
class ProductAtribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_atribute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['atribute_id', 'atribute_name', 'product_id'], 'integer'],
            [['value'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'atribute_id' => Yii::t('app', 'Atribute ID'),
            'atribute_name' => Yii::t('app', 'Atribute Name'),
            'product_id' => Yii::t('app', 'Product ID'),
            'value' => Yii::t('app', 'Value'),
        ];
    }
}
