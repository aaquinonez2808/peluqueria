<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Estilista $model */

$this->title = $model->id_esti;
$this->params['breadcrumbs'][] = ['label' => 'Estilistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="estilista-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_esti' => $model->id_esti], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_esti' => $model->id_esti], [
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
            'id_esti',
            'nombre_esti',
            'cedula_esti',
            'direccion_esti',
            'telefono_esti',
            'email_esti:email',
        ],
    ]) ?>

</div>
