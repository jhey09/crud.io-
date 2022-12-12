<?php

include("conexion.php");
$connect = connection();

$id=$_GET["id"];

$sql="DELETE FROM tabla WHERE id='$id'";
$query = mysqli_query($connect, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>