<?php
include("conexion.php");
$connect = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$sql = "INSERT INTO tabla VALUES('$id','$nombre','$apellido','$edad')";
$query = mysqli_query($connect, $sql);

if($query){
    Header("Location: index.php");
};


?>