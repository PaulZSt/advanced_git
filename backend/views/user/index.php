<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'fullname',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            [
                'attribute' => 'photo',
                'format' => 'image',
                'contentOptions' =>['class' => 'grid_image'],
                'value' =>  function ($data) {
                    return Yii::getAlias('@web').'/'. $data['photo'];
                },
            ],
            //'pm_all',
            //'pm_unread',
            'status',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:Y-m-d H:i:s']
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:Y-m-d H:i:s']
            ],
            [
                'attribute' => 'lastlogin_at',
                'format' => ['date', 'php:Y-m-d H:i:s']
            ],
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
