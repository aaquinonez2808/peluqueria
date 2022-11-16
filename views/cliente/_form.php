<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_cli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cedula_cli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_cli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_cli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_cli')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
