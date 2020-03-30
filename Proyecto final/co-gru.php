<?php  
include("conexbd.php"); 
if (isset($_POST['Dt4'])) {
  $array=$_POST['Dt4'];
  $NumG=$array['NumG'];
  $Nombre=$array['Nombre'];
}if (isset($_POST['Guardar'])) {
  if (strlen($NumG)>=1 && strlen($Nombre)>=1 ) {
  $consulta= "INSERT INTO grupos(NumG,Nombre) VALUES ('$NumG','$Nombre')";
  $resul= mysqli_query($conexxbd,$consulta);
  if ($resul) {
  ?>
  <h3>Datos registrados</h3>

  <?php 
  }else{
    ?>
    <h3>Hubo un error, Vuelva a intentar</h3>
    <?php
  }
}

}
?>