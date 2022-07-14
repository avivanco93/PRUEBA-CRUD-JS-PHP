<?php
include("conexion.php");
$con=conectar();

$ID=$_GET['ID'];

$sql="SELECT * FROM agendacontactos WHERE ID='$ID'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">

                <input type="text" class="form-control mb-3" name="name" placeholder="Nombre" value="<?php echo $row['name'] ?>">
                <input type="text" class="form-control mb-3" name="phone" placeholder="Telefono" value="<?php echo $row['phone'] ?>">
                <input type="text" class="form-control mb-3" name="date" placeholder="Fecha nacimiento" value="<?php echo $row['date'] ?>">
                <input type="text" class="form-control mb-3" name="address" placeholder="Dirreccion" value="<?php echo $row['address'] ?>">
                <input type="text" class="form-control mb-3" name="email" placeholder="Correo electronico" value="<?php echo $row['email'] ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                 

        </form>
    </div>
</body>
</html>