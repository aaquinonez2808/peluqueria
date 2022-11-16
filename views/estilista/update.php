<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Estilista $model */

$this->title = 'Update Estilista: ' . $model->id_esti;
$this->params['breadcrumbs'][] = ['label' => 'Estilistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_esti, 'url' => ['view', 'id_esti' => $model->id_esti]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estilista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
