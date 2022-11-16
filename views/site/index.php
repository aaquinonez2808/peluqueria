<?php

 
/** @var yii\web\View $this */
//Obtener el objeto de la db
use yii\helpers\Html;
$db = Yii::$app->db;
//Crear la consulta
$categorias = $db->createCommand('SELECT * FROM categoria');
$categorias = $categorias->queryAll();

$clientes = $db->createCommand('SELECT * FROM cliente');
$clientes = $clientes->queryAll();

$reservas = $db->createCommand('SELECT * FROM reserva');
$reservas = $reservas->queryAll();



//Mostrar los resultados

$this->title = 'PELUQUERIA';

?>


<div class="site-index container-fluid">

   <div class="jumbotron text-center font-italic ">
        <h1 class="title-curso servicios"> SERVICIO DE PELIQUERÍA Y ESTETÍCA</h1>
        <p class="font-italic">No tengas miedo de cambiar y ver lo hermosa que eres.</p>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
               <div class="carousel-caption  d-md-block">
                    <h5 >CORTES DE CABELLO PARA EL Y ELLA</h5>
                    <p>Descubre la belleza que tienes y explotala al maximo.</p>
                </div>
                <img src="<?= Yii::getAlias('@web')?>/images/10.jpg" class="img-responsive text-center border-right rounded-top" alt="..." width="1400px" height=" 500px">
                
            </div>
            <div class="carousel-item text-center">
            <img src="<?= Yii::getAlias('@web')?>/images/11.jpg" class="img-responsive border-right rounded-top" alt="..." width="1100px" height=" 500px">
            <div class="carousel-caption d-none d-md-block">
                <h5>PEINADOS PARA TODO TIPO DE CABELLO</h5>
                <p>Escoge el mas hermoso y explota tu belleza con creatividad.</p>
            </div>
            </div>
            <div class="carousel-item text-center">
            <img src="<?= Yii::getAlias('@web')?>/images/12.jpg" class="img-responsive border-right rounded-top" alt="..." width="1000px" >            <div class="carousel-caption d-none d-md-block">
                <h5>MANICURE Y PEDICURE</h5>
                <p>Los diseños mas hermosos para tus manos y pies</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div>

    </div>
    <div class="bg-info clearfix">
        <p>

        </p>
        
    </div>
    <div class="bg-info clearfix">
        <p>

        </p>
        
    </div>
    <h1 class="text-white bg-success text-center ">SERVICIOS</h1>
    
    <div class="body-content text center">
        <p></p>
        <p></p>

        <div class="row ">
            <div class="col-lg-4 text-center">
                <h4>CORTES DE CABELLO</h4>
                <img src="<?= Yii::getAlias('@web')?>/images/7.jpg" class="img-responsive rounded" alt="..." >

                <p>Realizamos todo tipo de corte de cabello, escoge cualquier diseño y nosotros te lo cumplimos 
                    te ofrecemos una gran variedad de estilos que le pueden gustar y contamos con acesoria 
                    pa ver cual es tu estilo que te hara brillar.
                </p>
                <p><a  class="btn btn-outline-info" href="http://localhost/peluqueria/web/index.php?r=categoria%2Findex">Mas Servicios</a></p>
            </div>
            
            <div class="col-lg-4 text-center">
                <h4>MANICURE Y PEDICURE</h4>
                <p></p>
                <img src="<?= Yii::getAlias('@web')?>/images/8.jpg " class="img-responsive rounded " alt="..." >
                <p>Nueva temporada, nuevas tendencias de manicure. El otoño ya está aquí, y con él llegan unos diseños
                    de uñas que llenarán sus manitas de mucho style..</p>

                <p><a  class="btn btn-outline-info" href="http://localhost/peluqueria/web/index.php?r=categoria%2Findex">Mas Servicios</a></p>
            </div>

            <div class="col-lg-4 text-center">
                <h4>MAQUILLAJE Y PESTAÑAS</h4>
                <img src="<?= Yii::getAlias('@web')?>/images/9.jpg" class="img-responsive rounded" alt="..." >
                <p>Un cambio de imagen es el cambio de marca de un ser humano, te ofrecemos exelentes diseños acesoria gratis,
                    si no conoces nada de maquillage nosotros te ayudamos a que luscas mas hermosa.</p>

                <p><a  class="btn btn-outline-info" href="http://localhost/peluqueria/web/index.php?r=categoria%2Findex">Mas Servicios</a></p>
            </div>
        </div>

    </div>
    <h1 class="text-white bg-success text-center ">ESTILISTAS</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
        <div class="col">
            <div class="card h-100">
            <img src="<?= Yii::getAlias('@web')?>/images/16.jpg" class="img-responsive rounded" alt="..." >
            <div class="card-body">
                <h5 class="card-title">ARIANA SANTAFE</h5>
                <p class="card-text">Telefono: 0978546258</p>
                <p class="card-text">email: arisan@gmail.com</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Última actualización hace 3 minutos</small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="<?= Yii::getAlias('@web')?>/images/17.jpg" class="img-responsive rounded" alt="..." >
            <div class="card-body">
                <h5 class="card-title">EDUARDO SANTAMARIA</h5>
                <p class="card-text">Telefono: 096321478</p>
                <p class="card-text">email: eduSan@gmail.com</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Última actualización hace 3 minutos</small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="<?= Yii::getAlias('@web')?>/images/15.jpg" class="img-responsive rounded" alt="..." >
            <div class="card-body">
                <h5 class="card-title">KEYLI BASANTES</h5>
                <p class="card-text">Telefono: 098885214</p>
                <p class="card-text">email: keyliBas@gmail.com</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Última actualización hace 3 minutos</small>
            </div>
            </div>
        </div>
        <div>
            <p>

            </p>
        </div>
        <p><a  class="btn btn-outline-info " href="http://localhost/peluqueria/web/index.php?r=estilista%2Findex">ESTILISTAS</a></p>
    </div>
    

</div>

    <div class ='row m-5 gap-3 mx-auto'>
        <div class="col-3">
            <div class="card p-3">
                <h1 class='text-center h3'>Categorias</h1>
                    <ul>
                    <?php
                    $cantidad = count($categorias);
                    Html::encode("{La cantidad es: $cantidad}");
                    foreach ($categorias as $categoria): ?>
                        <li>
                            <?=
                            Html::encode("{$categoria['nombre_cat']}") ?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
            </div>
        </div>

        <div class="col-3">
            <div class="card p-4">
                <h1 class='text-center h3'>Clientes</h1>
                    <ul>
                    <?php foreach ($clientes as $cliente): ?>
                        <li>
                            <?= 
                            Html::encode("{$cliente['nombre_cli']}") ?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
            </div>
        </div>

        <div class="col-3">
            <div class="card p-4">
                <h1 class='text-center h3'>Reservasiones</h1>
                    <ul>
                    <?php foreach ($reservas as $reserva): ?>
                        <li>
                            <?= 
                            Html::encode("{$reserva['fecha_reserv']}") ?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
            </div>
        </div>
    </div>
</div>
