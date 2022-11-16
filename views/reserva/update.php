<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reserva $model */

$this->title = 'Update Reserva: ' . $model->idreserva;
$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idreserva, 'url' => ['view', 'idreserva' => $model->idreserva]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reserva-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
