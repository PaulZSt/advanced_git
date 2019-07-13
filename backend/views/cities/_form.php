<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Area;

/* @var $this yii\web\View */
/* @var $model app\models\cities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'id_area')->dropDownList(Area::find()->select(['name','id'])->indexBy('id')->column()) ?>
    <?= $form->field($model, 'status')->checkbox() ?>




    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
