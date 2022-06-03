<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Preguntas</title>
	<link rel="stylesheet" href="estilos.css">
	<style type="text/css">
		th{
			text-align: right;
		}
	</style>
</head>
<body>
	<form action="validar_preguntas.php" method="POST">
<div class="pregunta">
<table class="table-bordered" align="center">
	<tr>
		<th><label for="p1">Nombre:</label></th>
		<td><input type="text" name="p1" id="p1"></td>
	</tr>
	<tr>
		<th><label for="p2">Correo:</label></th>
		<td><input type="email" name="p2" id="p2"></td>
	</tr>
	<tr>
		<th><label for="p3">URL:</label></th>
		<td><input type="text" name="p3" id="p3"></td>
	</tr>
	<tr>
		<th><label for="p4">Fecha:</label></th>
		<td><input type="date" name="p4" id="p4"></td>
	</tr>
	<tr>
		<th><label for="p5">Tiempo:</label></th>
		<td><input type="time" name="p5" id="p5"></td>
	</tr>
	<tr>
		<th><label for="p6">Mes:</label></th>
		<td><input type="month" name="p6" id="p6"></td>
	</tr>
	<tr>
		<th><label for="p7">Semana:</label></th>
		<td><input type="week" name="p7" id="p7"></td>
	</tr>
	<tr>
		<th><label for="p8">Número:</label></th>
		<td><select name="p8"><?php for($num=1;$num <= 100;$num++){ ?><option value="<?php echo $num ?>"><?php echo $num ?></option><?php } ?></select></td>
	</tr>
	<tr>
		<th><label for="p9">Teléfono:</label></th>
		<td><input type="text" name="p9" id="p9"></td>
	</tr>
	<tr>
		<th><label for="p10">Término de búsqueda:</label></th>
		<td><input type="text" name="p10" id="p10"></td>
	</tr>
	<tr>
		<th><label for="p11">Color favorito:</label></th>
		<td><input type="color" name="p11" id="p11"></td>
	</tr>
	<tr>
		<th>Acciones</th>
		<td><input type="reset" value="Limpiar">&nbsp;<input type="submit" value="Enviar"></td>
	</tr>
</table>
</div>
</form>
</body>
</html>
