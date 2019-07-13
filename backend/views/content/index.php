<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Cities;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Content'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'meta_title',
            //'description:ntext',
            //'meta_description:ntext',
            //'short_content:ntext',
            //'content:ntext',
            [
                'attribute' => 'city_id',
                'filter' => Cities::find()->select(['name','id'])->indexBy('id')->column(),
                'value' => 'hostgroup.name',
            ],
            [
                'attribute' => 'user_id',
                'filter' => Cities::find()->select(['name','id'])->indexBy('id')->column(),
                'value' => 'username.username',
            ],
            [
                'attribute' => 'category_id',
                'filter' => Cities::find()->select(['name','id'])->indexBy('id')->column(),
                'value' => 'category.title',
            ],
            //'price',
            //'image:ntext',
            [
                'attribute' => 'image',
                'format' => 'image',
                'contentOptions' =>['class' => 'grid_image'],
                'value' =>  function ($data) {
                    return \Yii::$app->imagemanager->getImagePath($data['image'], '100', '100','inset');
                },
            ],
            //'images:ntext',
            //'options:ntext',
            //'views',
            //'create_at',
            [
                'attribute' => 'create_at',
                'format' => ['date', 'php:Y-m-d H:i:s']
            ],
            //'update_at',
            [
                'attribute' => 'update_at',
                'format' => ['date', 'php:Y-m-d H:i:s']
            ],
            [
                'attribute' => 'status',
                'value' =>  function($model) {
                    return $model->status == 1 ? 'Active' : 'Inactive';

                },
            ],
            //'url:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
