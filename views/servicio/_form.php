<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Estilista;
use app\models\Categoria;
use yii\helpers\ArrayHelper;


/** @var yii\web\View $this */
/** @var app\models\Servicio $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servicio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_serv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo_serv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion_serv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_esti')->dropDownList(
 ArrayHelper::map(Estilista::find()->all(),'id_esti','nombre_esti'),
 ['prompt'=>'Seleccione…']) ?>


 <?= $form->field($model, 'id_cat')->dropDownList(
 ArrayHelper::map(Categoria::find()->all(),'id_cat','nombre_cat'),
 ['prompt'=>'Seleccione…']) ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
