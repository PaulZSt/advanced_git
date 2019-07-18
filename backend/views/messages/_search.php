<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MessagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messages-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'subj') ?>

    <?= $form->field($model, 'message') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'user_from') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'folder') ?>

    <?php // echo $form->field($model, 'pm_read') ?>

    <?php // echo $form->field($model, 'reply') ?>

    <?php // echo $form->field($model, 'send_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
