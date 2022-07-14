<?php
    include("conexion.php");
    $con= conectar();

    $ID=$_POST['ID'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $address=$_POST['address'];
    $email=$_POST['email'];

    $sql="UPDATE agendacontactos SET  name='$name',phone='$phone', date='$date',address='$address',email='$email' WHERE ID='$ID'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agenda.php");
    }
    

    
?>