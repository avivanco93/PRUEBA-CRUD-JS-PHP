<?php
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT * FROM agendacontactos";
    $query= mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Agenda</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="ID" placeholder="ID">
                    <input type="text" class="form-control mb-3" name="name" placeholder="Nombre">
                    <input type="number" class="form-control mb-3" name="phone" placeholder="Telefono">
                    <input type="date" class="form-control mb-3" name="date" placeholder="Fecha de nacimiento">
                    <input type="text" class="form-control mb-3" name="address" placeholder="Dirreccion">
                    <input type="email" class="form-control mb-3" name="email" placeholder="Correo electronico">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Fecha de nacimiento</th>
                            <th>Dirreccion</th>
                            <th>Correo electronico</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        while($row=mysqli_fetch_array($query)){
                       ?>
                       <tr>
                       <th><?php echo $row['ID']?></th>
                        <th><?php echo $row['name']?></th>
                        <th><?php echo $row['phone']?></th>
                        <th><?php echo $row['date']?></th>
                        <th><?php echo $row['address']?></th>
                        <th><?php echo $row['email']?></th>
                        <th><a href="actualizar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-info">editar</a></th>
                        <th><a href="delete.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">Eliminar</a></th>
                       </tr>
                       <?php
                       }
                       ?> 
                    </tbody>

                </table>  
                       
            </div>
        
            </div>
       
</html>