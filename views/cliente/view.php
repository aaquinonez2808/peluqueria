<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */

$this->title = $model->id_cli;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cliente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_cli' => $model->id_cli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_cli' => $model->id_cli], [
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
            'id_cli',
            'nombre_cli',
            'cedula_cli',
            'direccion_cli',
            'telefono_cli',
            'email_cli:email',
        ],
    ]) ?>

</div>
