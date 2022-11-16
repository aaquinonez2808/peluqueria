<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Servicio $model */

$this->title = $model->id_serv;
$this->params['breadcrumbs'][] = ['label' => 'Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="servicio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_serv' => $model->id_serv], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_serv' => $model->id_serv], [
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
            'id_serv',
            'nombre_serv',
            'costo_serv',
            'descripcion_serv',
            [
                'label' => 'Categoria',
                'value' => $model->cat->nombre_cat,
            ],
            [
                'label' => 'Estiiista',
                'value' => $model->esti->nombre_esti,
            ],
        ],
    ]) ?>

</div>
