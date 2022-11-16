<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EstilistaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="estilista-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_esti') ?>

    <?= $form->field($model, 'nombre_esti') ?>

    <?= $form->field($model, 'cedula_esti') ?>

    <?= $form->field($model, 'direccion_esti') ?>

    <?= $form->field($model, 'telefono_esti') ?>

    <?php // echo $form->field($model, 'email_esti') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
