<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="letras" class="col-12">
        <h2>Inicia sesión</h2>
    </div>

    <form action="<?php echo  base_url('public/principal/login'); ?>" method="post">
        <div class="container">
            <h4 id="subtitulo">Coreo electronico:</h4>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="gobernador@example.com">
                <label for="floatingInput">correo@example.com</label>
            </div>
            <h4 id="subtitulo">Contraseña:</h4>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="contra" placeholder="Password">
                <label for="floatingPassword">contraseña</label>
            </div>
            <div class="col-6">
                <button class="btn btn-dark" type="submit" name="ingresar">Ingresar</button>
            </div>
        </div>
        
    </form>
    <div class="container col-12">
       <p>
           ¿Eres nuevo?  <a href="<?php echo base_url('public/principal/registrar') ?>">Registrarme</a>
       </p>
        
    </div>

</body>

</html>

<style>
    body{
     width: 70%;
    padding-left: 30%;
    }

    #letras{
        text-align: center;
        padding-top: 200px;
    }
    .btn{
        margin-top: 3%;
        width: 30%;
        
    }
    a{
        text-decoration: none;
    }

</style>