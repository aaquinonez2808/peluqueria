<?php

use app\models\Servicio;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ServicioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Servicios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Servicio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_serv',
            'nombre_serv',
            'costo_serv',
            'descripcion_serv',
            [
                'label' => 'Categoria',
                'value' => 'cat.nombre_cat',
            ],
            [
                'label' =>'Estilista',
                'value' => 'esti.nombre_esti',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Servicio $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_serv' => $model->id_serv]);
                 }
            ],
        ],
    ]); ?>


</div>
