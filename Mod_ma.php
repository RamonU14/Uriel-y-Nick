<?php
include("conexbd.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Control De Maestros</title>
</head>
<body>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style_nav.css" rel="stylesheet">
  <nav class="navbar navbar-default navbar-fixed-top">

  <?php include('barraMa.php');?>
  </nav>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style_nav.css" rel="stylesheet">

      <?php
    //INICIO DE PHP


      $id = mysqli_real_escape_string($conexxbd,(strip_tags($_GET["id"],ENT_QUOTES)));
      $sql = mysqli_query($conexxbd, "SELECT * FROM maestros WHERE ID='$id'");
      if(mysqli_num_rows($sql) == 0){
        header("Location: tab_ma.php");
      }else{
        $row = mysqli_fetch_assoc($sql);
      }
      if(isset($_POST['Guardar'])){
        $Numem = mysqli_real_escape_string($conexxbd,(strip_tags($_POST["Numem"],ENT_QUOTES)));//Escanpando caracteres 
        $Nombre  = mysqli_real_escape_string($conexxbd,(strip_tags($_POST["Nombre"],ENT_QUOTES)));//Escanpando caracteres 
        $Correo = mysqli_real_escape_string($conexxbd,(strip_tags($_POST["Correo"],ENT_QUOTES)));//Escanpando caracteres 
        $Telefono = mysqli_real_escape_string($conexxbd,(strip_tags($_POST["Telefono"],ENT_QUOTES)));//Escanpando caracteres 

        $update = mysqli_query($conexxbd, "UPDATE maestros SET Numem='$Numem', Nombre='$Nombre', Correo='$Correo', Telefono='$Telefono' WHERE ID='$id'") or die(mysqli_error());
        if($update){
          header("Location: Mod_ma.php?id=".$id."&pesan=sukses");
        }else{
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
        }
      }
      
      if(isset($_GET['pesan']) == 'sukses'){
        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <center>
  <div class="card card-success">
              <div class="card-header">
                <h3>Exito Datos guardados </h3>
                <br>
                <a href="tab_ma.php">Ir a la tabla</a>
                </center>
              </div>
          </div>';
      }
      ?>
      <!-- Formulario -->
<br><br><br><br><br><br><br><br><br>
<center>
            <div class="card card-primary"style="width:600px">
              <div class="card-header"style="width:600px">
                <h3 class="card-title">Ingrese los datos</h3>
              </div>
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <!-- Llenado -->
                  <label>Numero de empleado</label>
                  <input type="number" class="form-control" name="Numem"  value="<?php echo $row ['Numem'] ?>" required style="width:400px " placeholder="N. Empl...">
                  <label>Nombre</label>
                  <input type="text" class="form-control" name="Nombre" value="<?php echo $row ['Nombre']; ?>" required style="width:400px" placeholder="Nombre">
                  <label>Correo</label>
                  <input type="email" class="form-control" name="Correo" value="<?php echo $row ['Correo']; ?>" required style="width:400px" placeholder="Correo...">
                  <label>Telefono</label>
                  <input type="number" class="form-control" name="Telefono" value="<?php echo $row ['Telefono']; ?>" required style="width:400px" placeholder="Telefono...">
                
                    <input type="submit" name="Guardar"><input type="reset" value="Borrar">
                  </div>
              </div>
          </form>
      </div>
  </center> 

</body>
</html>