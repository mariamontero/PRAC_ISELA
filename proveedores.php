<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Sistema de Venta </title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="fonts.css">
	<style type="text/css">
	body {
	background-color: #D6EAF8  ;
}
    </style>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

	<section>

<strong>
<head>
</strong>
    <meta charset="uft-8">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
     <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
     <strong>
     <center>
     <h1> 
     Registro de Proveedores</strong><strong></strong>
<p><font size="3" color="#0000FF">Llena los campos con la informacion correspondiente </font></p>
    <table>
    <right><img src="PROVEEDOR.png" width="207" height="99"></right></img>
    </table>
    <body>
	<form action="" method="post">
	
	
            <input type="text" name="no" placeholder="Codigo  del Proveedor" id="no" oninput="validacion('co')" required pattern="([A-Z ]{4,20})" maxlength="20"/><br>
					
			<input type="text" name="no" placeholder="Nombre Completo" id="no" oninput="validacion('no')" required pattern="([A-Z ]{4,20})" maxlength="20"/><br>
		
			<input type="text" name="ed" placeholder="Telefono" id="ed" oninput="validacion('ed')" required pattern="([0-9 ]{8,10})" maxlength="10"/><br>

			<input type="text" name="se" placeholder="Direccion" id="se" oninput="validacion('se')" required pattern="([A-Z ]{10,30})" maxlength="30"/><br>
					
					
        <input type="text" name="ca" placeholder="Cuenta Bancaria" id="ca" oninput="validacion('ca')" required pattern="([A-Z] {5,20})" maxlength="20"/>
        </input>
        
        <center><input type="submit" value="Guardar"/></center> 
        
         <br> <link rel="stylesheet" type="text/css" href="estilos/estilos.css"><center><h4> 
         <strong>Busqueda de Proveedores</strong>
<p><font size="3" color="#008080">Ingresa el Codigo y el Nombre del proveedor para obtener informacion  sobre él.</font></p>
    
        <input type="text" name="co" placeholder="Codigo del Proveedor" id="co" oninput="validacion('co')" required pattern="([A-Z ]{4,20})" maxlength="20"/>
		
        <input type="text" name="no" placeholder="Nombre Completo" id="ed" oninput="validacion('no')" required pattern="([0-9 ]{8,10})" maxlength="10"/>
        
        <center><input type="submit" value="Buscar"/></center> 
        <center><input type="submit" value="regresar"/></center> 
        