<?php
$usuario=$_POST['nombre'];
$contraseña=$_POST['contra'];
$user="franco";
$pass="123";

if($usuario==$user && $contraseña==$pass){
	echo'<script type="text/javascript">
    alert("Ingreso con éxito");
    window.location.href="preguntas.php";
    </script>';
}else {
	echo'<script type="text/javascript">
    alert("Usuario o contraseña incorrectos");
    window.location.href="index.html";
    </script>';
}




?>