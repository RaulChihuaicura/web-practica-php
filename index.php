<?php include('consultas.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Proyecto PHP</title>
</head>
<body>
    <form action="consultas.php" method="post">
        <input type="text" name="id_persona">
        <input type="text" name="rut" placeholder="Cedula">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="text" name="edad" placeholder="Edad">
        <button type="submit" name="guardar">Guardar</button>
        <button type="submit" name="eliminar">Eliminar</button>
    </form>
    <br>
    <table>
    <thead>
        <th>id</th>
        <th>rut</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>edad</th>
    </thead>
    <tbody>
        <?php mostrar($conexion); ?>
    </tbody>
    </table>
    
    <?php
//        require_once "global.php";

        // Connection to Data Base
//        $conexion =new mysqli(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);

//        mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');
        // Check connection
//        if (mysqli_connect_errno()){
//            printf("Fallo conección a la Base de Datos: %\n", mysqli_connect_errno());
//            exit();
//        }else
//        header('Location: index1.html');





        // Connection to Data Base
        //$conexion   = mysqli_connect("localhost", "root", "", "webgestion");
        //if (!$conexion){
            //echo "*** Error al conectar la base de datos ***";
        //}else{
            // echo "Conección realizada con exito";
            //header('Location: index1.html');
        //}
    ?> 
    

    </div>
</body>
</html>