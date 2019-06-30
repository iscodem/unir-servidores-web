
<?php
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo "Tus credenciales son: " . $username . " " . $password . "."
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de bienvenida al sistema</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css" >

</head>

<body>
    <div class="row">
        <div class="col-12  text-center">
            <h1>Bienvenidos al trabajo del curso Servidores Web de UNIR</h1>
            <form method="get" action="index.php">
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Salir </button>
            </form>
        </div>
    </div>
    
</body>
</html>