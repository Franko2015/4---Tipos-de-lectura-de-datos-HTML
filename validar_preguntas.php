<?php 
echo'<script type="text/javascript">
    alert("Datos ingresados con éxito");
    </script>';
/*inicializar datos con método POST*/
$nombre=$_POST['p1'];
$correo=$_POST['p2'];
$url=$_POST['p3'];
$fecha=$_POST['p4'];
$tiempo=$_POST['p5'];
$mes=$_POST['p6'];
$semana=$_POST['p7'];
$num=$_POST['p8'];
$tel=$_POST['p9'];
$term_busq=$_POST['p10'];
$color_fav=$_POST['p11'];

//cambio de formato en las fechas
$fechas=date("d-m-Y", strtotime($fecha));
$semanas=date(strftime("%U",strtotime($semana)));
$meses=date("m", strtotime($mes));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Respuesta</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<table class="table-bordered" align="center">
	<tr>
		<th><label>Nombre:</label></th>
		<td><label><?php echo $nombre ?></label></td>
	</tr>
	<tr>
		<th><label for="p2">Correo:</label></th>
		<td><label><?php echo $correo ?></label></td>
	</tr>
	<tr>
		<th><label for="p3">URL:</label></th>
		<td><label><?php echo $url ?></label></td>
	</tr>
	<tr>
		<th><label for="p4">Fecha:</label></th>
		<td><label><?php echo $fechas ?></label></td>
	</tr>
	<tr>
		<th><label for="p5">Tiempo:</label></th>
		<td><label><?php echo $tiempo ?></label></td>
	</tr>
	<tr>
		<th><label for="p6">Mes:</label></th>
		<td><label><?php echo $meses ?></label></td>
	</tr>
	<tr>
		<th><label for="p7">Semana:</label></th>
		<td><label><?php echo $semanas ?></label></td>
	</tr>
	<tr>
		<th><label for="p8">Número:</label></th>
		<td><label><?php echo $num ?></label></td>
	</tr>
	<tr>
		<th><label for="p9">Teléfono:</label></th>
		<td><label><?php echo $tel ?></label></td>
	</tr>
	<tr>
		<th><label for="p10">Término de búsqueda:</label></th>
		<td><label><?php echo $term_busq ?></label></td>
	</tr>
	<tr>
		<th><label for="p11">Color favorito:</label></th>
		<td><label><?php echo $color_fav ?></label></td>
	</tr>
</table>
</body>
</html>