<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Estilista $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="estilista-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_esti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cedula_esti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_esti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_esti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_esti')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
