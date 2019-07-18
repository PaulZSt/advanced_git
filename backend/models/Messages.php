<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property string $subj
 * @property string $message
 * @property int $user
 * @property int $user_from
 * @property int $date
 * @property int $folder
 * @property int $pm_read
 * @property int $reply
 * @property int $send_id
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['user', 'user_from', 'date', 'folder', 'pm_read', 'reply', 'send_id'], 'integer'],
            [['subj'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subj' => Yii::t('app', 'Subj'),
            'message' => Yii::t('app', 'Message'),
            'user' => Yii::t('app', 'User'),
            'user_from' => Yii::t('app', 'User From'),
            'date' => Yii::t('app', 'Date'),
            'folder' => Yii::t('app', 'Folder'),
            'pm_read' => Yii::t('app', 'Pm Read'),
            'reply' => Yii::t('app', 'Reply'),
            'send_id' => Yii::t('app', 'Send ID'),
        ];
    }




    public function getArea() {
        return $this->hasOne(Messages::className(),['id' => 'user_id']);
        //$model = Messages::findOne($id)
    }
}
