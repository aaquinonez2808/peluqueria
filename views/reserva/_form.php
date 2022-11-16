<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cliente;
use yii\helpers\ArrayHelper; 

/** @var yii\web\View $this */
/** @var app\models\Reserva $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="reserva-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_reserv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hora_reserv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_reserv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_client')->dropDownList(
 ArrayHelper::map(Cliente::find()->all(),'id_cli','nombre_cli'),
 ['prompt'=>'Seleccione…']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
