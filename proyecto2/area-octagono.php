<!DOCTYPE html>
<html lang="es">

<head>
<title>Resultado de datos</title>
 <meta charset="utf-8" />
</head>

<body>
	<?php
	if ($_GET['octagono'] == "oct"){
		$resultado = ($_GET['base'] * $_GET['lado'] * $_GET['altura'])/2;	
		echo "<center><h3> El area del octagono es de $resultado </h3></center>";
	}
?>

</body>
</html>