<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='actualizar.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="img/icono-removebg-preview.png">
    <script src='main.js'></script>
</head>

<body class="body">

    <?php
    include "navbar.php";
    include "sidebar.php";
    ?>
<div class="atras"><a href="perfil.php"><img src="img/flecha-izquierda.png" alt=""></div></a>
    

    <div class="color">
        <h1>Actualizacion de datos personales</h1><br><br>
        <form action="#">
            <label for="Nombre">Nombre :</label><br>
            <input type="text" name="Nombre" id="Nombre" placeholder="Nombre"><br>
            <label for="Documento">Documento :</label><br>
            <select class="tipeid" name="tipeid"><br>
                <option value="2">T.I</option>
                <option value="1">C.C</option>
            </select>
            <input type="text" name="Documento" id="Documento" placeholder="Documento"><br>
            <label for="Telefono">Telefono :</label><br>
            <input type="text" name="Telefono" id="Telefono" placeholder="Telefono"><br>
            <label for="tipo de sangre">Tipo De Sangre :</label><br>
            <input type="text" id="" placeholder="tipo de sangre"><br>
            <label for="fecha de nacimiento">Fecha De Nacimiento :</label><br>
            <input type="date" id="fecha de nacimiento"><br>
            <label for="correo">Correo electronico :</label><br>
            <input type="text" name="correo" id="correo" placeholder="correo"><br><br>
            <input class="button" type="submit" value=Actualizar>
        </form>
    </div>

</body>

</html>