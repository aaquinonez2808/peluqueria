<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Reserva $model */

$this->title = $model->idreserva;
$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reserva-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idreserva' => $model->idreserva], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idreserva' => $model->idreserva], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idreserva',
            'fecha_reserv',
            'hora_reserv',
            'total_reserv',
            [
                'label' => 'Cliente',
                'value' => $model->client->nombre_cli,
            ],
        ],
    ]) ?>

</div>
