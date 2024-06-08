<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = Yii::$app->name;
?>

<div class="page-heading about-page-heading">
    <div class="inner-content">
        <div class="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Вход</h2>
                            <span>Пожалуйста, заполните следующие поля для входа в систему: </span>
                        </div>
                        <form id="subscribe" action="" method="get">
                            
                                <span>
                                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($model, 'password')->passwordInput() ?>

                                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                                    <div class="my-1 mx-0" style="color:#999;">
                                        Если вы забыли свой пароль, вы можете
                                        <?= Html::a('сбросить его', ['site/request-password-reset']) ?>.
                                        <br>
                                        Вам нужно новое электронное письмо с подтверждением?
                                        <?= Html::a('Повторно отправить', ['site/resend-verification-email']) ?>
                                    </div>

                                    <div class="form-group">
                                        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>
                                </span>
                           
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>