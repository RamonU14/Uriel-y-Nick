<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Materias</title>
</head>
<form method="post">
	<meta charset="utf-8">
<body bgcolor="Grey">
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<center><h1>Formulario de materias</h1></center>
<center><h2>Ingresa los datos por favor.</h2></center>
<div class="card-body">
   <form role="form">
       <div class="row">
           <div class="col-sm-6">
             <div class="form-group">
                   <label>Clave de la materia</label>
           <input type="number" class="form-control" name="Dt4[ClaveM]"  placeholder="Clave...">
                   <label>Nombre</label>
           <input type="text" class="form-control" name="Dt4[Nombre]" placeholder="Nombre...">
           <br>
            <input type="submit" name="Guardar">
            <input type="reset" value="Borrar">
       </div>
    </div>
<?php
include("co-mat.php")
?>
</body>
</html>