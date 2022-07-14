<?php
include("conexion.php");
$con= conectar();

$ID=$_POST['ID'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$address=$_POST['address'];
$email=$_POST['email'];

$sql="INSERT INTO agendacontactos VALUES('$ID','$name','$phone','$date','$address','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: agenda.php");
}else{
    
}
?>