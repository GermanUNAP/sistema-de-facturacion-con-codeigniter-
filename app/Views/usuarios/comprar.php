<?php
    $igv = ($Precio)*0.18;
    $igv = round($igv, 3);
    $Precio=$Precio-$igv;
    $precioFinal = $igv + $Precio;
    
    $db = \Config\Database::connect();
    
    $db->query("INSERT INTO `compras`( `correo`, `id`, `precio`, `fecha`) VALUES ('$correo','$ID','$precioFinal', current_timestamp())");
?>

<div class="row  boleta">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="titulo">
            <div>
                <i class="fas fa-store fa-2x">  </i>  
            </div>
            <div class="title">
                <h2>
                     Modulo de compra en la tienda 
                </h2>
            </div>

        </div>
        <div class="usuario">
            <h3>
                Informacion del usuario:
            </h3>
            <div class="information">
                <div class="inf">
                    <div class="subtitulo">
                        <i class="fas fa-at fa-lg">  </i>
                        <h5 class="titulo"><b>Correo:</b></h5>
                    </div>
                    <h5 class="info">
                        <?php echo $correo ?>
                    </h5>
                </div>
                <div class="inf">
                    <div class="subtitulo">
                        <i class="fas fa-user-alt fa-lg" >  </i>
                        <h5 class="titulo"><b>Nombres:</b></h5>
                    </div>
                    <h5 class="info">
                        <?php echo $nombreUsuario ?>
                    </h5>
                </div>
                <div class="inf">
                    <div class="subtitulo">
                        <i class="fas fa-address-book fa-lg">  </i>
                        <h5 class="titulo"><b>Apellidos: </b></h5>
                    </div>
                    <h5 class="info">
                            <?php echo $apellido?>
                    </h5>
                </div>
                <div class="inf">
                    <div class="subtitulo">
                        <i class="far fa-credit-card fa-lg">  </i>
                        <h5 class="titulo"><b>Tarjeta de crédito:</b></h5>
                    </div>
                    <h5 class="info"><?php echo $tarjeta ?></h5>   
                </div> 
            </div>
        </div>
        <div class="producto">
            <h3>
                Información del producto:
            </h3>
            <div class="information">
                <div class="inf">
                    <div class="subtitulo">
                        <i class="fab fa-product-hunt fa-lg">  </i>
                        <h5 class="titulo"><b>ID del producto:</b></h5>
                    </div>
                    <h5 class="info">
                        <?php echo $ID ?>
                    </h5>
                </div>
                <div class="inf">
                    <div class="subtitulo">
                    <i class="fas fa-tags fa-lg"></i>
                        <h5 class="titulo"><b>Nombre del producto:</b></h5>
                    </div>
                    <h5 class="info">
                        <?php echo $nombreProducto ?>
                    </h5>
                </div>
                <div class="inf">
                    <div class="subtitulo">
                        <i class="fas fa-dollar-sign fa-lg"></i>
                        <h5 class="titulo"><b>Precio sin IGV: </b></h5>
                    </div>
                    <h5 class="info">
                            <?php echo $Precio?>
                    </h5>
                </div>
                <div class="inf">
                    <div class="subtitulo">
                    <i class="far fa-file-alt fa-lg"></i>
                        <h5 class="titulo"><b>Descripción:</b></h5>
                    </div>
                    <h5 class="info"><?php echo $descripcion ?></h5>   
                </div> 
            </div>
        </div>
        <div class="precio">
            <h3>
                Precio a pagar
            </h3>
            <div class="information-producto">
                <div class="inf">
                    <div class="subtitulo">
                        <h5 class="titulo"><b>Precio antes:</b></h5>
                    </div>
                    <h5 class="infor">
                        <?php echo $Precio ?>
                    </h5>
                </div>
                <div class="inf">
                    <div class="subtitulo">
                        <i class="fas fa-percentage fa-lg"> </i>
                        <h5 class="titulo"><b>  IGV(18%):</b></h5>
                    </div>
                    <h5 class="infor">
                        <?php echo $igv ?>
                    </h5>
                </div>
                <div class="inf">
                    <div class="subtitulo">
                    <i class="fas fa-cash-register fa-lg"></i>
                        <h5 class="titulo"><b>Precio final: </b></h5>
                    </div>
                    <h5 class="infor">
                            <?php echo $precioFinal?>
                    </h5>
                </div>
                
            </div>
        </div>
                
        </div>
    <div class="col-3"></div>
</div>

<!--Tipo de letra-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
<style>
    .information-producto{
        text-align: right;
    }
    .infor{
        text-decoration: underline grey;
    }
    .titulo{
        display: inline-flex;
    }
    .title{

    }
    .letra{
    height: 75px;
    margin-bottom: 0px;
    padding-top: 5%;
    padding-left: 5%;
    color: rgb(37, 37, 110);
    margin-bottom: 0px;
    font-family: comfortaa;
    }
    .nombre{
        text-align: center;
        font-size: 30px;
    }
    
    .subtitulo{
        display: inline-flex;
    }
    .subtitulo i{
        width: 40px;
        transform: scale(1,1);
    }
    .information{
        padding-left: 40px;

    }

    .info{
        font-size:20px;
        width: 100%;
        margin-top:5px;
        margin-bottom:15px;
        margin-left: 30px;
        color: rgb(49, 49, 49);
        border-bottom: 1px dashed rgb(71, 71, 71);
        font-family: 'Arvo';
        font-size: 23px; 
    }
    .information a{
        text-decoration: none;
        font-size: 20px;
    }
    .boleta{
        margin: 0px;
    }
    .info{
        margin-right:0px
    }
    .title{
        color: rgb(77,85,112);
    }
</style>