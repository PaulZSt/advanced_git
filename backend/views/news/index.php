<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create News'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>'{summary}'.Html::activeDropDownList($searchModel, 'myPageSize', [1 => 10, 2 => 20, 50 => 50, 100 => 100],['id'=>'myPageSize'])."{items}<br/>{pager}",
        'filterModel' => $searchModel,
        'filterSelector' => '#myPageSize',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'meta_title',
            'short_content:ntext',
            'content:ntext',
             [
                    'attribute' => 'image',
                    'format' => 'image',
                 'contentOptions' =>['class' => 'grid_image'],
                    'value' =>  function ($data) {
                        return Yii::getAlias('@web').'/'. $data['image'];
                    },
            ],
            //'create_at',
            //'update_at',
            [   'attribute' => 'status',
                'filter' => ['0' => 'notactive', '1' => 'Active'],
                'filterInputOptions' => ['prompt' => 'All educations', 'class' => 'form-control', 'id' => null
                    ],
                ],
            //'url:ntext',
            //'views',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



</div>
