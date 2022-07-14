<?php

 include("conexion.php");
 $con=conectar();

 $ID=$_GET['ID'];

 $sql="DELETE FROM agendacontactos WHERE ID='$ID'";
 $query=mysqli_query($con,$sql);

 if($query){
    Header("Location: agenda.php");
 }
?>