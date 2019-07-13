<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?  echo Html::img(Yii::$app->homeUrl.'/'.$model->photo, $options = ['class' => 'postImg', 'style' => ['width' => '180px']]) ?>
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

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
