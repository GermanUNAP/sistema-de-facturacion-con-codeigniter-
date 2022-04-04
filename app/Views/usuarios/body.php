
    <div class="row continer productos">
        <div class="col-3"></div>
        <div class="col-6 row">

            <?php foreach ($productos as $producto) : ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $producto['IMAGEN']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto['NOMBRE'] ?></h5>
                            <h4 class=""><?php echo $producto['PRECIO'] ?></h4>
                            <p class="card-text"><?php echo $producto['DESCRIPCION'] ?></p>
                            
                            <a href="<?php echo base_url('/public/principal/comprar') ?>?var=.&var1=<?php echo $producto['ID'] ?>&var2=<?php echo ("$correo")?>" class="btn btn-dark">Comprar</a>
                            
                        </div>
                    </div>
                </div>
                
            <?php endforeach; ?>
        </div>
        <div class="col-3"></div>
    </div>

</body>
