<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Equipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_equipo')->textInput(['maxlength' => true, 'placeholder' => 'nombre del equipo']) ?>

    <?= $form->field($model, 'shortname_equipo')->textInput(['maxlength' => true, 'placeholder' => 'nombre corto']) ?>

    <?= $form->field($model, 'fecha_equipo')->textInput(['placeholder'=> 'yy/mm/dd']) ?>

    <?= $form->field($model, 'direccion_equipo')->textInput(['maxlength' => true, 'placeholder' => 'direccion(opcional)']) ?>

    <?= $form->field($model, 'email_equipo')->textInput(['maxlength' => true, 'placeholder' => 'email']) ?>

    <?= $form->field($model, 'web_equipo')->textInput(['maxlength' => true, 'placeholder' => 'web(opcional)']) ?>

    <?= $form->field($model, 'user_equipo')->textInput(['maxlength' => true, 'placeholder' => 'user']) ?>

    <?= $form->field($model, 'password_equipo')->passwordInput(['maxlength' => true, 'placeholder' => 'password']) ?>

  <!--  <?= $form->field($model, 'authkey')->passwordInput(['maxlength' => true, 'placeholder' => 'confimar password']) ?> -->

   <!-- <?= $form->field($model, 'admin')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton('Registrar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
