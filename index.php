<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>Session</title>
</head>
<body>
    <div class="container">
        <div class="row text-center mt-5">
            <div class="col">
                <span id="session" class="btn btn-success">Generar Sesion Aleatoria</span>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-6">
                <a class="btn btn-warning" href="views/comprobar.php">Comprobar Sesion</a>
            </div>
            <div class="col-6">
                <a class="btn btn-danger" href="control/close.php">Cerrar Sesion</a>
            </div>
        </div>
    </div>
    <script src="public/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="manager/session.js"></script>
</body>
</html>