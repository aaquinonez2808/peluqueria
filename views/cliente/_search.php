<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ClienteSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_cli') ?>

    <?= $form->field($model, 'nombre_cli') ?>

    <?= $form->field($model, 'cedula_cli') ?>

    <?= $form->field($model, 'direccion_cli') ?>

    <?= $form->field($model, 'telefono_cli') ?>

    <?php // echo $form->field($model, 'email_cli') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
