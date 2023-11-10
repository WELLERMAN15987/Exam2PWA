<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono3.png" type="image/x-icon">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="../Styles/Index.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Visita SuKarne Planta El Lucero</h1>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div id="msj_login"></div>
                    </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="./Li/V1.php">Visita 1</a><br><br>
                            <a class="btn btn-primary" href="./Li/V2.php" >Visita 2</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img src="./Img/logo.jpg" alt="" height="130" width="300" class="img-sl">
        <img src="./Img/Front.jpg" alt="" height="130" width="300" class="img-sl">
        <img src="./Img/logoz.jpeg" alt="" height="130" width="300" class="img-sl">
    </div>
</div><hr>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('./sw.js')
              .then(function(registration) {
                console.log('Service Worker registrado con éxito:', registration);
              })
              .catch(function(error) {
                console.log('Error al registrar el Service Worker:', error);
              });
        }

    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>