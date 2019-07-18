<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<style>
    .login_wrapper {
        width: 320px;
        background: #fff;
        margin: 20px auto;
        min-height: 200px;
        border: 1px solid #f3f3f3;
    }


    .login_wrapper__inner {
        padding: 50px 30px 60px;
        box-shadow: 1px 1.732px 10px 0px rgba(0, 0, 0, 0.063);
        text-align: center;
    }

    .login_wrapper__inner input[type="checkbox"]{
        float: left;
        margin-right: 5px;
        margin-top: 2px;
        cursor: pointer;
    }
    .login_wrapper__inner label[for="rememberMe"]{
        cursor: pointer;
    }
    .login_wrapper button {
        cursor: pointer;
        background: #00A885;
        width: 100%;
        border: 0;
        padding: 10px 15px;
        color: #fff;
        font-size: 20px;
        -webkit-transition: .3s linear;
        transition: .3s linear;
    }
    .login_wrapper .form-group {
        position: relative;
        margin-bottom: 20px;
    }
    .login_wrapper .form-group  label {
        position: absolute;
        top: 9px;
        left: 10px;
        font-size: 16px;
        color: #cdcdcd;
        font-weight: normal;
        padding: 2px 5px;
        z-index: 5;
    }

    .login_wrapper .form-group input{
        outline: none;
        display: block;
        width: 100%;
        height: 40px;
        position: relative;
        z-index: 3;
        border: 1px solid #d9d9d9;
        padding: 10px 10px;
        background: #ffffff;
        box-sizing: border-box;
        font-wieght: 400;
        transition: 0.3s ease;
    }


    .login_wrapper .form-group .lighting {
        background: #00A885;
        width: 0;
        height: 2px;
        display: inline-block;
        position: absolute;
        top: 40px;
        left: 0;
        transition: all 0.3s linear;
    }

    .login_wrapper .form-group:hover .lighting {
        width: 100%;
    }



    </style>





<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="login_wrapper">
        <div class="login_wrapper__inner">
            <h2 class="title">Login to your account</h2>
            <p>Please fill out the following fields to login:</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username',[
                        'template' => '<div class="form-group">{input}{label}<span class="lighting"></span></div>'
                ])->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <!--<?= $form->field($model, 'rememberMe')->checkbox() ?>-->

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group-remeber">
                    <?= Html::submitButton('Login', ['class' => 'btn', 'name' => 'login- button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


