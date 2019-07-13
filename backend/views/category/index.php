<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
             'meta_title',
            'description:ntext',
            [
                'attribute' => 'parent_id',
                'filter' => \app\models\Category::find()->select(['title','id'])->indexBy('id')->where('parent_id')->column(),
                'value' => function ($data) {
                    $parent_id = \app\models\Category::find()->select(['title'])->where(['id' => $data->parent_id])->one();
                    if($parent_id->title) {
                        return $parent_id->title;
                    } else {
                        return false;
                    }
                }

            ],
            //'meta_description:ntext',
            //'image:ntext',
            //'create_at',
            //'update_at',
            //'order',
            //'status',
            //'url:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
