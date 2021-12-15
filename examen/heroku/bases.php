<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>




<h1><center> Domicilio
</h1></center>
        <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-10">

     <form name="formulario" method="POST" action="bases.php">
         
        <div class="form-group">

            <label for="pos">Postal</label>
            <input type="text" name="pos" class="form-control" id="primero" placeholder="Postal"> 

        </div>
          
        <div class="form-group">

            <label for="est">Estado</label>
            <input type="text" name="est" class="form-control" id="segundo" placeholder="Estado"> 

        </div>
          
        <div class="form-group">

            <label for="mun">Municipio</label>
            <input type="text" name="mun" class="form-control" id="tercero" placeholder="Municipio"> 

        </div>
          
        <div class="form-group">

            <label for="col">Colonia</label>
            <input type="text" name="col" class="form-control" id="cuarto" placeholder="Colonia"> 

        </div>
      
             
        <input type="submit" value="Validar" class="btn btn-success" name="btn1">
      
       

        <?php
        if(isset($_POST['btn1']))
        {
            include("conexion.php");

            $pos = $_POST['pos'];
            $est = $_POST['est'];
            $mun = $_POST['mun'];
            $col = $_POST['col'];


            $conexion->query("INSERT INTO $tabla_db1 (postal,estado,municipio,colonia) values ('$pos','$est','$mun','$col')");
       
            include("cerrar_conexion.php");
            echo "Se Incertaron Correctamente";
        }

        ?>


    </div>
      

</body>
</html>