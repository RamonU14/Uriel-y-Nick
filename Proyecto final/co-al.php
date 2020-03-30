<?php  
include("conexbd.php"); 
if (isset($_POST['Dt4'])) {
	$array=$_POST['Dt4'];
	$Matricula=$array['Matricula'];
	$Nombre=$array['Nombre'];
	$Correo=$array['Correo'];
	$Telefono=$array['Telefono'];
}if (isset($_POST['Guardar'])) {
	if (strlen($Matricula)>=1 && strlen($Nombre)>=1 && strlen($Correo)>=1 && strlen($Telefono)>=1 ) {
	$consulta= "INSERT INTO alumnos(Matricula,Nombre,Correo,Telefono) VALUES ('$Matricula','$Nombre','$Correo','$Telefono')";
	$resul= mysqli_query($conexxbd,$consulta);
	if ($resul) {
	?>
	<h3>Datos registrados</h3>

	<?php 
	}else{
		?>
		<h3>Hubo un error, Vuelva a intentar.</h3>
		<?php
	}
}

}
?>