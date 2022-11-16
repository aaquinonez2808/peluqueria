<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ServicioSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servicio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_serv') ?>

    <?= $form->field($model, 'nombre_serv') ?>

    <?= $form->field($model, 'costo_serv') ?>

    <?= $form->field($model, 'descripcion_serv') ?>

    <?= $form->field($model, 'id_esti') ?>

    <?php // echo $form->field($model, 'id_cat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
