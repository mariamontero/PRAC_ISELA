<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Sistema para venta de autopartes </title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="fonts.css">
	<style type="text/css">
	body {
	background-color: #D6EAF8;
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
     <strong> Relizar Ventas.</strong></strong>
<p><font size="3" color="#0000FF">LLene los campos correspondientes para completar la venta</font></p>
 <table>
    <center><img src="VENTAS.png" width="207" height="99"></center></img>
    </table>
<p>

  <input type="text" name="fe" placeholder="Fecha de Venta" id="fe" oninput="validacion('fe')" required pattern="([A-Z ]{10,30})" maxlength="30"/>
  
  <input type="text" name="cod" placeholder="Empleado" id="cod" oninput="validacion('cod')" required pattern="([A-Z ]{4,20})" maxlength="20"/><br>
  
  <input type="text" name="co" placeholder="Codigo del Cliente" id="co" oninput="validacion('co')" required pattern="([A-Z ]{4,20})" maxlength="20"/>
  
  <input type="text" name="no" placeholder="Nombre Completo" id="ed" oninput="validacion('no')" required pattern="([0-9 ]{8,10})" maxlength="10"/>
  <br>
  
  <input type="text" name="po" placeholder="Producto" id="po" oninput="validacion('po')" required pattern="([A-Z ]{10,30})" maxlength="30"/>
  
  <input type="text" name="pi" placeholder="Cantidad de Piezas" id="pi" oninput="validacion('pi')" required pattern="([A-Z ]{10,30})" maxlength="30"/>
  <br>
  
  <input type="text" name="mon" placeholder="Monto" id="mon" oninput="validacion('mon')" required pattern="([A-Z ]{10,30})" maxlength="30"/><br>
</p>
<center>
<input type="submit" value="Enviar"/></center>
    
    <center><input type="submit" value="Imprimir Factura"/></center>
    
     
