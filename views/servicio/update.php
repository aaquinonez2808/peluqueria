<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Servicio $model */

$this->title = 'Update Servicio: ' . $model->id_serv;
$this->params['breadcrumbs'][] = ['label' => 'Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_serv, 'url' => ['view', 'id_serv' => $model->id_serv]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servicio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
