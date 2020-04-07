<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
	<nav class="navbar navbar-default navbar-fixed-top">
	<?php include('barraMa.php');?>
	</nav>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
<body>
	<!-- Tabla -->
<center>
        <div class="table-responsive">
	    <table class="table table" style="text-align:center;">		
		<tr>
	    <th style="text-align:center;">ID</th>
	    <th style="text-align:center;">No. de empleado</th>
		<th style="text-align:center;">Nombre</th>
		<th style="text-align:center;">Correo</th>
		<th style="text-align:center;">Telefono</th>
		<th style="text-align:center;">Modificaciones</th>
	    </tr>	
		<tbody>
			<!-- Conexion a la tabla de datos -->
			<?php
			include ("conexbd.php");
			$query="SELECT * FROM maestros";
			$resultado=$conexxbd->query($query); 
			while ($row=$resultado->fetch_assoc()) {
			?>
			<!-- Borrar Datos -->
<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id = mysqli_real_escape_string($conexxbd,(strip_tags($_GET["id"],ENT_QUOTES)));
				$cek = mysqli_query($conexxbd, "SELECT * FROM maestros WHERE ID='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '';
				}else{
					$delete = mysqli_query($conexxbd, "DELETE FROM maestros WHERE ID='$id'");
					if($delete){
						echo '';
					}else{
						echo '';
					}
				}
			}
			?>
<!-- Celdas y columnas -->
			<?php echo '
			            <tr>
							<td>'.$row['ID'].'</td>
							<td>'.$row['Numem'].'</td>
                            <td>'.$row['Nombre'].'</td>
                            <td>'.$row['Correo'].'</td>
                            <td>'.$row['Telefono'].'</td>
							<td><center><a href="Mod_ma.php?id='.$row['ID'].'"class="btn btn-primary btn-sm">Modificar</a>
							<a href="tab_ma.php?aksi=delete&id='.$row['ID'].'"class="btn btn-danger btn-sm">Eliminar</a></center>

							</td>

                        </tr>'
			 ?>
			<?php
		}
			?>
		</tbody>


	</table>
</div>
</center>
</body>
</html>