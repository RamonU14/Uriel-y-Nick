<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Grupos</title>
</head>
<form method="post">
	<meta charset="utf-8">
<body bgcolor="Grey">
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <nav class="navbar navbar-default navbar-fixed-top">

  <?php include('barraGru.php');?>
  </nav>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style_nav.css" rel="stylesheet">

	<center><h1>Formulario de grupos</h1></center>
<center><h2>Ingresa los datos por favor.</h2></center>
<div class="card-body">
   <form role="form">
       <div class="row">
           <div class="col-sm-6">
             <div class="form-group">
                   <label>Numero de grupo</label>
           <input type="number" class="form-control" name="Dt4[NumG]"  placeholder="Grupo...">
                   <label>Nombre</label>
           <input type="text" class="form-control" name="Dt4[Nombre]" placeholder="Nombre...">
           <br>
            <input type="submit" name="Guardar">
            <input type="reset" value="Borrar">
       </div>
    </div>
<?php
include("co-gru.php")
?>
</body>
</html>