<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?  echo Html::img(Yii::$app->homeUrl.'/'.$model->image, $options = ['class' => 'postImg', 'style' => ['width' => '180px']]) ?>
    <? echo Html::a('<span class="glyphicon glyphicon-trash"></span>', ['posts/deleteimage', 'id' => $model->id], [
    'onclick'=>
    "$.ajax({
            type:'POST',
            cache: false,
            url: '".Url::to(['news/deleteimage', 'id' => $model->id])."',
            success  : function(response) {
            $('.link-del').html(response);
            $('.postImg').remove();
            }
        });
    return false;
    $('.postImg').remove(); // Удалить превью картинки
    ",
    'class' => 'link-del'
    ]);
    ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'views')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
