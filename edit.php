<?php

include("conexion.php");
$connect = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];


$sql= " UPDATE tabla SET nombre ='$nombre', apellido='$apellido', edad='$edad', WHERE id='$id' ";
$query = mysqli_query($connect, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>