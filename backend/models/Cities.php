<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property int $id_area
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'id_area'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['id_area'], 'exist', 'targetClass' => Cities::className(), 'targetAttribute' => ['id_area' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'status' =>  (Yii::t('app', 'Active')),
            'id_area' => 'Id Area',
        ];
    }

    public function getIdArea() {
        return $this->hasOne(Area::className(),['id' => 'id_area']);
    }

    public function getArea() {
        return $this->hasOne(Area::className(),['id' => 'id_area']);
    }

}
