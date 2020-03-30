<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Alumnos</title>
</head>
<form method="post">
	<meta charset="utf-8">
<body bgcolor="Grey">
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<center><h1>Formulario alumnos</h1></center>
<center><h2>Ingresa los datos por favor.</h2></center>
<div class="card-body">
   <form role="form">
       <div class="row">
           <div class="col-sm-6">
             <div class="form-group">
                   <label>Matricula</label>
           <input type="number" class="form-control" name="Dt4[Matricula]"  placeholder="Matricula...">
                   <label>Nombre</label>
           <input type="text" class="form-control" name="Dt4[Nombre]" placeholder="Nombre...">
                   <label>Correo</label>
           <input type="email" class="form-control" name="Dt4[Correo]" placeholder="Correo...">
                   <label>Telefono</label>
           <input type="number" class="form-control" name="Dt4[Telefono]" placeholder="Telefono...">
           <br>
            <input type="submit" name="Guardar">
            <input type="reset" value="Borrar">
       </div>
    </div>
<?php
include("co-al.php");
  ?>
</body>
</html>