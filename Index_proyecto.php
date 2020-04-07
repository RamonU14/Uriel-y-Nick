<!DOCTYPE html>
<html>
<head>
	<title>Control de Universodad</title>
</head>
<form action="#" method="POST">
<body bgcolor="Grey">

<center><h1>Seleccione su opcion</h1></center>
<center><h1><select onchange="window.location.href=this.options[this.options.selectedIndex].value" name="opcion" size="1">
    <option value="#">Elija a donde se quiera dirigir.</option>
    <option value="Control_alu.php">Control de Alumnos </option>
    <option value="Control_carr.php">Control de Carreras </option>
    <option value="Control_ma.php">Control de Maestros </option>
    <option value="Control_gru.php">Control de Grupos </option>
    <option value="Control_mat.php">Control de Materias</option>

    
</select></h1></center>
</body>
</form>
</html>