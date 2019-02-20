<?php
$conexion = new mysqli("localhost", "root", "", "liga");

if (empty($_POST['id'])||(empty($_POST['nombre']))||(empty($_POST['ciudad']))||(empty($_POST['puntos'])||(empty($_POST['puntos'])))) {
   echo "<h2>Introduce todos los datos me cauen en satan.   </h2>";
}else{

$id_equipo = $_POST['id'];
$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$web = $_POST['web'];
$puntos = $_POST['puntos'];


if($insert  = $conexion->query("INSERT INTO `equipo` (`id_equipo`, `nombre`, `ciudad`, `web`,`puntos`) values ($id_equipo,'$nombre','$ciudad','$web',$puntos)")){
    echo "<h2>Listo, Insertado en la base de datos</h2>";
}else{
    echo "<h3>Datos repetidos.</h3>";
}

}   