<?php

use app\models\Estilista;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\EstilistaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Estilistas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estilista-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Estilista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_esti',
            'nombre_esti',
            'cedula_esti',
            'direccion_esti',
            'telefono_esti',
            //'email_esti:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Estilista $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_esti' => $model->id_esti]);
                 }
            ],
        ],
    ]); ?>


</div>
