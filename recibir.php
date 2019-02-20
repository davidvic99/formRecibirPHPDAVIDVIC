<?php
$conexion = new mysqli("localhost", "root", "", "nba");

if (empty($_POST['nombre'])||(empty($_POST['ciudad']))||(empty($_POST['conferencia']))||(empty($_POST['division']))) {
   echo "<h2>Introduce todos los datos me cauen en satan.   </h2>";
}else{

$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$conferencia = $_POST['conferencia'];
$division = $_POST['division'];

if($insert  = $conexion->query("INSERT INTO `equipos` (`Nombre`, `Ciudad`, `Conferencia`, `Division`) values ('$nombre','$ciudad','$conferencia','$division')")){
    echo "<h2>L isto, Insertado en la base de datos</h2>";
}else{
    echo "<h3>Datos repetidos.</h3>";
}

}