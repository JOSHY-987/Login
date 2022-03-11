<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Guia</title>
    <?php require_once "Menu.php"?>
</head>

<body>

    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 p-5 bg-white shadow-lg rounded">
                <form method="POST" action="Validar.php">
                    <h1 class="text-center">Inicio Sesion</h1>
                    <hr>

                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input id="user" class="form-control" type="text" name="user">
                    </div>

                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input id="pass" class="form-control" type="password" name="pass">
                    </div>

                    <br>
                    <div class="text-center text-primary">
                        Ha olvidado su contraseña?
                    </div>

                    <br>
                    <div class="row justify-content-center">
                        <button class="btn btn-primary" type="submit">Acceder</button>
                    </div>
                    <br>

                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="Ajax/Funcion.js"></script>
</body>

</html>