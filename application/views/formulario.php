<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
     <fieldset>
	<form  action="<?php echo site_url(); ?>/Login/InicioSesion" method="post"  >
     <div align="center">
     	<font color="red"><h1>Inicio de Sesion</h1></font>
     </div>
     <div align="center">
     	<font color="navy"><label>Usuario:</label>
     	<input type="text" name="user">
     </div><br>
     <div align="center">
     	<font color="green"><label>Contraseña:</label>
     	<input type="password" name="password">
     </div><br>
     <div align="center">
     	<input type='submit' value='Iniciar Sesion'>
     </div>
</fieldset>
</body>
</html>