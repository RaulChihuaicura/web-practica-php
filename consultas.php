<?php
require_once "global.php";

// Connection to Data Base
$conexion =new mysqli(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);

//$sql    = "Select * from Persona";

//$result = $conexion ->query($sql);

//if ($result->num_rows > 0){
    //Output data of each row
//    while($row = $result->fetch_assoc()){
//        echo "id: " .$row["id_persona"]. " - Nombre: ". $row["nombre"]. " " . //$row["apellido"]. "<br>";
//    }
//}else{
//    echo "0 results";
//}
//$conexion->close();

consulta($conexion);

function consulta($conexion){
    if(isset($_POST['guardar'])){
        insertar($conexion);
    }
    if(isset($POST['eliminar'])){
        eliminar($conexion);
    }
}

function insertar($conexion){
    $id_persona = $_POST['id_persona'];
    $rut        = $_POST['rut'];
    $nombre     = $_POST['nombre'];
    $apellido   = $_POST['apellido'];
    $edad       = $_POST['edad'];

    $query      = "INSERT INTO persona(id_persona,rut, nombre, apellido, edad)
                    Values (0, '$rut','$nombre','$apellido','$edad')";

    $conexion->query($query);
    $conexion->close();
}
function eliminar($conexion){
    $id_persona    = $_POST['id_persona'];

    $query      = "DELETE FROM persona WHERE id_persona='$id_persona'";

    $conexion->query($query);
    $conexion->close();
}

function mostrar($conexion){
    $mostrar    = "SELECT * FROM persona";
    $query      = $conexion->query($mostrar);

    while($fila = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$fila['id_persona'];
        echo "<td>".$fila['rut'];
        echo "<td>".$fila['nombre'];
        echo "<td>".$fila['apellido'];
        echo "<td>".$fila['edad'];
        echo "<tr>";
    }
        $conexion->close();
    }




?>