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
        <h2>Registrar</h2>
    </div>

    <form action="<?php echo base_url('public/principal/guardar');?>" method="post">
        <div class="container">
            <h4 id="subtitulo">Coreo electronico:</h4>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="gobernador@example.com" required>
                <label for="floatingInput">correo@example.com</label>
            </div>
            <h4 id="subtitulo">Nombres :</h4>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="nombre" placeholder="German" required>
                <label for="floatingPassword">German Oliver</label>
            </div>
            <h4 id="subtitulo">Apellidos:</h4>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="apellido" placeholder="Password" required>
                <label for="floatingPassword">Chura Condori</label>
            </div>
            <h4 id="subtitulo">tarjeta de crédito</h4>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="tarjeta" placeholder="Password" required>
                <label for="floatingPassword">4000-0012-3456-7899</label>
            </div>
            <h4 id="subtitulo">Contraseña:</h4>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="contra" placeholder="Password" required>
                <label for="floatingPassword">contraseña</label>
            </div>
            <div class="col-12 boton">
                <button class="btn btn-dark" type="submit" name="registrar">Registrar</button>
            </div>
        <br>
            <p>
                Al ingresar esta sujeto a nuestras <a href="">Políticas de privacidad</a>
            </p>
        </div>
        
    </form>
    <div class="container col-12">
       <p>
           ¿Ya estas registrado?  <a href=" <?php echo base_url('public/principal/inicio') ?>">Ingresar</a>
       </p>
        
    </div>
</body>

</html>

<style>
    .boton{
        text-align: center;
        width: 600px;
        padding-left: 120px;
    }
    .btn{
        width: 5%;
    }
    body{
     width: 70%;
    padding-left: 30%;
    }

    #letras{
        text-align: center;
        padding-top: 150px;
    }
    .btn{
        margin-top: 3%;
        width: 30%;
        
    }
    a{
        text-decoration: none;
    }

</style>